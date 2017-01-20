TRUE = function() { return true };

DEFAULT_FILTER_STATE = {
  queryString: "",  // String
  host: null,  // null | String
  topics: new Set(),  // Set(String)
  type: null,  // null | String
};

// Namespaced to prevent pollution of the global namespace
var SortEvents = {

  filterState: _extends({}, DEFAULT_FILTER_STATE),

  //////////
  // Getters
  //
  getNameFilter: function () {
    var q = SortEvents.filterState.queryString;
    if (q !== "") {
      return function (e) {
        var r = new RegExp(q, 'i');
        return !!( $(e).data('event-name').match(r) );
      }
    } else {
      return TRUE;
    }
  },

  getHostFilter: function () {
    var host = SortEvents.filterState.host;
    if (!host) {
      return TRUE;
    } else if (host === "MSC") {
      return function (e) { return $(e).data('event-host') === "MSC"; };
    } else {
      return function (e) { return $(e).data('event-host') !== "MSC"; };
    }
  },

  getTypeFilter: function () {
    var type = SortEvents.filterState.type;
    if (!type) {
      return TRUE;
    } else {
      return function (e) { return $(e).data('event-type') === type; };
    }
  },

  getTopicsFilter: function () {
    // const queryTopics = [...SortEvents.filterState.topics]  // ES2015
    var queryTopics = [].concat(_toConsumableArray(SortEvents.filterState.topics));
    if (queryTopics.length === 0) {
      return TRUE;
    } else {
      return function (e) {
        // Return true if all the query topics are present in the events topics
        var eventTopics = $(e).data('event-topics').split(', ');
        return queryTopics.every(function (t) {
          return eventTopics.includes(t);
        });
      };
    }
  },

  getFilterFunctions: function () {
    return [  // [ Event => Bool]
      SortEvents.getNameFilter(),
      SortEvents.getHostFilter(),
      SortEvents.getTypeFilter(),
      SortEvents.getTopicsFilter(),
    ];
  },

  //////////
  // Setters
  //
  setState: function(attr, value) {
    SortEvents.filterState[attr] = value;
    SortEvents.render();
  },

  setQueryString: function (x) { SortEvents.setState("queryString", x); },
  setHost: function (x) { SortEvents.setState("host", x); },
  setType: function (x) { SortEvents.setState("type", x); },
  addTopic: function (x) {
    SortEvents.filterState.topics.add(x);
    SortEvents.render();
  },
  removeTopic: function (x) {
    SortEvents.filterState.topics.delete(x);
    SortEvents.render();
  },

  clearFilters: function () {
    SortEvents.filterState = _extends(
      {},
      DEFAULT_FILTER_STATE,
      {topics: new Set()}
    );
    SortEvents.render();
  },

  ////////////
  // Rendering
  //
  render: function() {
    SortEvents.filterEvents();
    SortEvents.renderSelectedFilters();
  },

  filterEvents: function () {
    var allEvents = $(".c-single-event");
    var filters = SortEvents.getFilterFunctions();

    allEvents.each(function (i, e) {
      var eventVisible = filters
        .every( function (f) { return f(e); });

      if (eventVisible) {
        $(e).show();
      } else {
        $(e).hide();
      }
    })
  },

  renderSelectedFilters: function () {
    SortEvents.renderSearchBox();
    SortEvents.renderTags();
    SortEvents.displayClearButton();
  },

  renderSearchBox: function () {
    var state = SortEvents.filterState.queryString;
    var input = $('.o-search-box__text');

    if (input.val() !== state) {
      input.val(state);
    }
  },

  renderTags: function () {
    var state = SortEvents.filterState;
    var activeFilters = $(".o-search-box__active-filters");
    activeFilters.empty();

    if (state.host) {
      activeFilters.append(Tag(
        { label: 'Host', value: state.host, onRemove: 'SortEvents.setHost(null)' }
      ));
    }

    state.topics.forEach(function (topic) {
      activeFilters.append(Tag(
        { label: 'Topic', value: topic, onRemove: "SortEvents.removeTopic('" + topic + "')" }
      ));
    });

    if (state.type) {
      activeFilters.append(Tag(
        { label: 'Type', value: state.type, onRemove: 'SortEvents.setType(null)' }
      ));
    }
  },

  displayClearButton: function () {
    var state = SortEvents.filterState;
    var button = $('.o-search-box__button a');
    if (state.host || state.type || state.topics.size > 0 || state.queryString.length > 0) {
      button.show();
    } else {
      button.hide();
    }
  },

}

// props: { label: String, value: String, onRemove: stringified Function }
var Tag = function(props) {
  var tmp = document.createElement('div');

  tmp.innerHTML = '<span class="o-tag"><strong>'
    + props.label
    + ':</strong> '
    + props.value
    + '<button class="o-tag-remove" onClick="'
    + props.onRemove
    + '"></button></span>';

  return tmp.children[0]
}
