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
    var q = this.filterState.queryString;
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
    var host = this.filterState.host;
    if (!host) {
      return TRUE;
    } else if (host === "MSC") {
      return function (e) { return $(e).data('event-host') === "MSC"; };
    } else {
      return function (e) { return $(e).data('event-host') !== "MSC"; };
    }
  },

  getTypeFilter: function () {
    var type = this.filterState.type;
    if (!type) {
      return TRUE;
    } else {
      return function (e) { return $(e).data('event-type') === type; };
    }
  },

  getTopicsFilter: function () {
    // const queryTopics = [...this.filterState.topics]  // ES2015
    var queryTopics = [].concat(_toConsumableArray(this.filterState.topics));
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
      this.getNameFilter(),
      this.getHostFilter(),
      this.getTypeFilter(),
      this.getTopicsFilter(),
    ];
  },

  //////////
  // Setters
  //
  setState: function(attr, value) {
    this.filterState[attr] = value;
    this.render();
  },

  toggleState: function(attr, value) {
    if (this.filterState[attr] === value) {
      this.filterState[attr] = null;
    } else {
      this.filterState[attr] = value;
    }

    this.render();
  },

  addTopic: function (x) {
    this.filterState.topics.add(x);
    this.render();
  },
  removeTopic: function (x) {
    this.filterState.topics.delete(x);
    this.render();
  },

  setQueryString: function (x) { this.setState("queryString", x); },
  toggleHost: function (x) { this.toggleState("host", x); },
  toggleType: function (x) { this.toggleState("type", x); },
  toggleTopic: function (x) {
    if (this.filterState.topics.has(x)) {
      this.removeTopic(x);
    } else {
      this.addTopic(x);
    }
  },

  clearFilters: function () {
    this.filterState = _extends(
      {},
      DEFAULT_FILTER_STATE,
      {topics: new Set()}
    );
    this.render();
  },

  ////////////
  // Rendering
  //
  render: function() {
    this.filterEvents();
    this.renderSelectedFilters();
  },

  filterEvents: function () {
    var allEvents = $(".c-single-event");
    var filters = this.getFilterFunctions();

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
    this.renderSearchBox();
    this.renderTags();
    this.displayClearButton();
    this.renderCheckboxes();
  },

  renderSearchBox: function () {
    var state = this.filterState.queryString;
    var input = $('.o-search-box__text');

    if (input.val() !== state) {
      input.val(state);
    }
  },

  renderTags: function () {
    var state = this.filterState;
    var activeFilters = $(".o-search-box__active-filters");
    activeFilters.empty();

    if (state.host) {
      activeFilters.append(Tag(
        { label: 'Host', value: state.host, onRemove: 'SortEvents.toggleHost(null)' }
      ));
    }

    state.topics.forEach(function (topic) {
      activeFilters.append(Tag(
        { label: 'Topic', value: topic, onRemove: "SortEvents.removeTopic('" + topic + "')" }
      ));
    });

    if (state.type) {
      activeFilters.append(Tag(
        { label: 'Type', value: state.type, onRemove: 'SortEvents.toggleType(null)' }
      ));
    }
  },

  displayClearButton: function () {
    var state = this.filterState;
    var button = $('.o-search-box__button');
    if (state.host || state.type || state.topics.size > 0 || state.queryString.length > 0) {
      button.show();
    } else {
      button.hide();
    }
  },

  renderCheckboxes: function () {
    var s = this.filterState
    $('#msc').prop('checked', s.host === "MSC");
    $('#other').prop('checked', s.host && s.host !== "MSC");
    $('#workshop').prop('checked', s.type === "Workshop");
    $('#lecture').prop('checked', s.type === "Lecture");
    $('#webinar').prop('checked', s.type === "Webinar");
    $('#production').prop('checked', s.topics.has("Case production"));
    $('#methodology').prop('checked', s.topics.has("Case methodology"));
    $('#assessment').prop('checked', s.topics.has("Assessment and evaluation"));
    $('#teaching').prop('checked', s.topics.has("Case teaching"));
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
