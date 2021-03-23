(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/app.css */ "./assets/css/app.css");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var _components_App__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/App */ "./assets/js/components/App.jsx");



 // import { Formulaire } from './components/App';
// Recherche si la page actuelle contient une balise racine React.

var reactRoot = document.getElementById('react-root'); // Est-ce que la balise a été trouvée ?

if (reactRoot !== null) {
  // Oui, démarrage de React.
  react_dom__WEBPACK_IMPORTED_MODULE_2__.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(_components_App__WEBPACK_IMPORTED_MODULE_3__.App, null), reactRoot);
}

/***/ }),

/***/ "./assets/js/components/App.jsx":
/*!**************************************!*\
  !*** ./assets/js/components/App.jsx ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "App": () => (/* binding */ App)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_string_trim_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.string.trim.js */ "./node_modules/core-js/modules/es.string.trim.js");
/* harmony import */ var core_js_modules_es_string_trim_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_trim_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.string.includes.js */ "./node_modules/core-js/modules/es.string.includes.js");
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.string.search.js */ "./node_modules/core-js/modules/es.string.search.js");
/* harmony import */ var core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_search_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }


























function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }


var App = /*#__PURE__*/function (_React$Component) {
  _inherits(App, _React$Component);

  var _super = _createSuper(App);

  function App() {
    var _this;

    _classCallCheck(this, App);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "databaseValues", []);

    _defineProperty(_assertThisInitialized(_this), "state", {
      search: '',
      // saisie de la recherche
      searchResults: [] // résultats trouvés pour la recherche en cours

    });

    _defineProperty(_assertThisInitialized(_this), "onChangeInput", function (event) {
      // La variable search va contenir la nouvelle chaîne à rechercher
      var search = event.target.value.trim();
      console.log(search);
      var searchResults = []; // Enregistrement de la saisie de l'utilisateur

      _this.setState({
        search: event.target.value
      }); // Y a t'il une saisie valable ?


      if (search.length == 0) {
        // Non, efface les résultats de la recherche
        _this.setState({
          searchResults: []
        }); // On quitte immédiatement


        return;
      }

      var _iterator = _createForOfIteratorHelper(_this.databaseValues),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var value = _step.value;

          /*
           * Vérifier si la valeur en base de données (value) contient la saisie 
           * de l'utilisateur (search)
           */
          if (value.name.includes(search) == true) {
            searchResults.push(value.name);
          }
        } // searchResults = searchResults.map((searchResult) => <p>{ searchResult }</p>);

      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }

      searchResults = searchResults.map(function (searchResult, index) {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_24__.createElement("p", {
          key: index
        }, searchResult);
      });

      _this.setState({
        searchResults: searchResults
      });
    });

    _defineProperty(_assertThisInitialized(_this), "onSubmit", function (event) {
      event.preventDefault();
    });

    return _this;
  }

  _createClass(App, [{
    key: "componentDidMount",
    value: function componentDidMount() {
      var _this2 = this;

      // Déclenche une requête HTTP (AJAX) pour récupérer les données de la base SQL
      window.fetch('/database').then(function (response) {
        // Récupération de la réponse HTTP, désérialisation du JSON
        return response.json(); // équivalent à JSON.parse()
      }).then(function (databaseValues) {
        console.log(databaseValues); // Stockage des données.

        _this2.databaseValues = databaseValues;
      });
    }
  }, {
    key: "render",
    value: function render() {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_24__.createElement("form", {
        onSubmit: this.onSubmit
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_24__.createElement("input", {
        onChange: this.onChangeInput,
        value: this.state.search
      }), this.state.searchResults.length > 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_24__.createElement("article", {
        className: "search-results my-3"
      }, this.state.searchResults));
    }
  }]);

  return App;
}(react__WEBPACK_IMPORTED_MODULE_24__.Component);

/***/ }),

/***/ "./assets/css/app.css":
/*!****************************!*\
  !*** ./assets/css/app.css ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = __webpack_require__.O(undefined, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-51cf69"], () => (__webpack_exec__("./assets/js/app.js")));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb21wb25lbnRzL0FwcC5qc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9hcHAuY3NzPzBjMTAiXSwibmFtZXMiOlsicmVhY3RSb290IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsIlJlYWN0RE9NIiwiQXBwIiwic2VhcmNoIiwic2VhcmNoUmVzdWx0cyIsImV2ZW50IiwidGFyZ2V0IiwidmFsdWUiLCJ0cmltIiwiY29uc29sZSIsImxvZyIsInNldFN0YXRlIiwibGVuZ3RoIiwiZGF0YWJhc2VWYWx1ZXMiLCJuYW1lIiwiaW5jbHVkZXMiLCJwdXNoIiwibWFwIiwic2VhcmNoUmVzdWx0IiwiaW5kZXgiLCJwcmV2ZW50RGVmYXVsdCIsIndpbmRvdyIsImZldGNoIiwidGhlbiIsInJlc3BvbnNlIiwianNvbiIsIm9uU3VibWl0Iiwib25DaGFuZ2VJbnB1dCIsInN0YXRlIiwiUmVhY3QiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFFQTtBQUNBO0NBR0E7QUFHQTs7QUFDQSxJQUFJQSxTQUFTLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixZQUF4QixDQUFoQixDLENBRUE7O0FBQ0EsSUFBR0YsU0FBUyxLQUFLLElBQWpCLEVBQXVCO0FBRW5CO0FBQ0FHLCtDQUFBLGVBQWdCLGlEQUFDLGdEQUFELE9BQWhCLEVBQXlCSCxTQUF6QjtBQUNILEM7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDakJEO0FBR08sSUFBTUksR0FBYjtBQUFBOztBQUFBOztBQUFBO0FBQUE7O0FBQUE7O0FBQUE7QUFBQTtBQUFBOztBQUFBOztBQUFBLHFFQUVxQixFQUZyQjs7QUFBQSw0REFJWTtBQUNKQyxZQUFNLEVBQVUsRUFEWjtBQUN3QjtBQUM1QkMsbUJBQWEsRUFBRyxFQUZaLENBRXdCOztBQUZ4QixLQUpaOztBQUFBLG9FQTRCb0IsVUFBQ0MsS0FBRCxFQUFXO0FBRXZCO0FBQ0EsVUFBSUYsTUFBTSxHQUFHRSxLQUFLLENBQUNDLE1BQU4sQ0FBYUMsS0FBYixDQUFtQkMsSUFBbkIsRUFBYjtBQUNBQyxhQUFPLENBQUNDLEdBQVIsQ0FBWVAsTUFBWjtBQUNBLFVBQUlDLGFBQWEsR0FBRyxFQUFwQixDQUx1QixDQU92Qjs7QUFDQSxZQUFLTyxRQUFMLENBQWM7QUFBRVIsY0FBTSxFQUFFRSxLQUFLLENBQUNDLE1BQU4sQ0FBYUM7QUFBdkIsT0FBZCxFQVJ1QixDQVV2Qjs7O0FBQ0EsVUFBR0osTUFBTSxDQUFDUyxNQUFQLElBQWlCLENBQXBCLEVBQXVCO0FBQ25CO0FBQ0EsY0FBS0QsUUFBTCxDQUFjO0FBQUVQLHVCQUFhLEVBQUU7QUFBakIsU0FBZCxFQUZtQixDQUluQjs7O0FBQ0E7QUFDSDs7QUFqQnNCLGlEQW1CSixNQUFLUyxjQW5CRDtBQUFBOztBQUFBO0FBbUJ2Qiw0REFBd0M7QUFBQSxjQUE5Qk4sS0FBOEI7O0FBRXBDO0FBQ1o7QUFDQTtBQUNBO0FBQ1ksY0FBR0EsS0FBSyxDQUFDTyxJQUFOLENBQVdDLFFBQVgsQ0FBb0JaLE1BQXBCLEtBQStCLElBQWxDLEVBQXdDO0FBQ3BDQyx5QkFBYSxDQUFDWSxJQUFkLENBQW1CVCxLQUFLLENBQUNPLElBQXpCO0FBQ0g7QUFDSixTQTVCc0IsQ0E4QnZCOztBQTlCdUI7QUFBQTtBQUFBO0FBQUE7QUFBQTs7QUErQnZCVixtQkFBYSxHQUFHQSxhQUFhLENBQUNhLEdBQWQsQ0FBa0IsVUFBQ0MsWUFBRCxFQUFlQyxLQUFmLEVBQXlCO0FBRXZELDRCQUFPO0FBQUcsYUFBRyxFQUFHQTtBQUFULFdBQW1CRCxZQUFuQixDQUFQO0FBQ0gsT0FIZSxDQUFoQjs7QUFLQSxZQUFLUCxRQUFMLENBQWM7QUFBRVAscUJBQWEsRUFBRUE7QUFBakIsT0FBZDtBQUNILEtBakVMOztBQUFBLCtEQW1FZSxVQUFDQyxLQUFELEVBQVc7QUFFbEJBLFdBQUssQ0FBQ2UsY0FBTjtBQUNILEtBdEVMOztBQUFBO0FBQUE7O0FBQUE7QUFBQTtBQUFBLFdBVUksNkJBQW9CO0FBQUE7O0FBRWhCO0FBQ0FDLFlBQU0sQ0FBQ0MsS0FBUCxDQUFhLFdBQWIsRUFBMEJDLElBQTFCLENBQStCLFVBQUNDLFFBQUQsRUFBYztBQUV6QztBQUNBLGVBQU9BLFFBQVEsQ0FBQ0MsSUFBVCxFQUFQLENBSHlDLENBR2pCO0FBRTNCLE9BTEQsRUFLR0YsSUFMSCxDQUtRLFVBQUNWLGNBQUQsRUFBb0I7QUFFeEJKLGVBQU8sQ0FBQ0MsR0FBUixDQUFZRyxjQUFaLEVBRndCLENBSXhCOztBQUNBLGNBQUksQ0FBQ0EsY0FBTCxHQUFzQkEsY0FBdEI7QUFFSCxPQVpEO0FBYUg7QUExQkw7QUFBQTtBQUFBLFdBd0VJLGtCQUFTO0FBQ0wsMEJBQ0k7QUFBTSxnQkFBUSxFQUFHLEtBQUthO0FBQXRCLHNCQUNJO0FBQU8sZ0JBQVEsRUFBRyxLQUFLQyxhQUF2QjtBQUF1QyxhQUFLLEVBQUcsS0FBS0MsS0FBTCxDQUFXekI7QUFBMUQsUUFESixFQUVNLEtBQUt5QixLQUFMLENBQVd4QixhQUFYLENBQXlCUSxNQUF6QixHQUFrQyxDQUFsQyxpQkFDRTtBQUFTLGlCQUFTLEVBQUM7QUFBbkIsU0FBMkMsS0FBS2dCLEtBQUwsQ0FBV3hCLGFBQXRELENBSFIsQ0FESjtBQVFIO0FBakZMOztBQUFBO0FBQUEsRUFBeUJ5Qiw2Q0FBekIsRTs7Ozs7Ozs7Ozs7O0FDSEEiLCJmaWxlIjoiYXBwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuLi9jc3MvYXBwLmNzcyc7XG5cbmltcG9ydCBSZWFjdCAgICBmcm9tICdyZWFjdCc7XG5pbXBvcnQgUmVhY3RET00gZnJvbSAncmVhY3QtZG9tJztcblxuaW1wb3J0IHsgQXBwIH0gZnJvbSAnLi9jb21wb25lbnRzL0FwcCc7XG4vLyBpbXBvcnQgeyBGb3JtdWxhaXJlIH0gZnJvbSAnLi9jb21wb25lbnRzL0FwcCc7XG5cblxuLy8gUmVjaGVyY2hlIHNpIGxhIHBhZ2UgYWN0dWVsbGUgY29udGllbnQgdW5lIGJhbGlzZSByYWNpbmUgUmVhY3QuXG5sZXQgcmVhY3RSb290ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3JlYWN0LXJvb3QnKTtcblxuLy8gRXN0LWNlIHF1ZSBsYSBiYWxpc2UgYSDDqXTDqSB0cm91dsOpZSA/XG5pZihyZWFjdFJvb3QgIT09IG51bGwpIHtcblxuICAgIC8vIE91aSwgZMOpbWFycmFnZSBkZSBSZWFjdC5cbiAgICBSZWFjdERPTS5yZW5kZXIoPEFwcCAvPiwgcmVhY3RSb290KTtcbn1cblxuXG4iLCJpbXBvcnQgUmVhY3QgZnJvbSAncmVhY3QnO1xuXG5cbmV4cG9ydCBjbGFzcyBBcHAgZXh0ZW5kcyBSZWFjdC5Db21wb25lbnQge1xuXG4gICAgZGF0YWJhc2VWYWx1ZXMgPSBbXTtcblxuICAgIHN0YXRlID0ge1xuICAgICAgICBzZWFyY2ggICAgICAgIDogJycsICAgICAgICAgLy8gc2Fpc2llIGRlIGxhIHJlY2hlcmNoZVxuICAgICAgICBzZWFyY2hSZXN1bHRzIDogW10gICAgICAgICAgLy8gcsOpc3VsdGF0cyB0cm91dsOpcyBwb3VyIGxhIHJlY2hlcmNoZSBlbiBjb3Vyc1xuICAgIH07XG5cblxuICAgIGNvbXBvbmVudERpZE1vdW50KCkge1xuXG4gICAgICAgIC8vIETDqWNsZW5jaGUgdW5lIHJlcXXDqnRlIEhUVFAgKEFKQVgpIHBvdXIgcsOpY3Vww6lyZXIgbGVzIGRvbm7DqWVzIGRlIGxhIGJhc2UgU1FMXG4gICAgICAgIHdpbmRvdy5mZXRjaCgnL2RhdGFiYXNlJykudGhlbigocmVzcG9uc2UpID0+IHtcblxuICAgICAgICAgICAgLy8gUsOpY3Vww6lyYXRpb24gZGUgbGEgcsOpcG9uc2UgSFRUUCwgZMOpc8OpcmlhbGlzYXRpb24gZHUgSlNPTlxuICAgICAgICAgICAgcmV0dXJuIHJlc3BvbnNlLmpzb24oKTsgLy8gw6lxdWl2YWxlbnQgw6AgSlNPTi5wYXJzZSgpXG5cbiAgICAgICAgfSkudGhlbigoZGF0YWJhc2VWYWx1ZXMpID0+IHtcblxuICAgICAgICAgICAgY29uc29sZS5sb2coZGF0YWJhc2VWYWx1ZXMpO1xuXG4gICAgICAgICAgICAvLyBTdG9ja2FnZSBkZXMgZG9ubsOpZXMuXG4gICAgICAgICAgICB0aGlzLmRhdGFiYXNlVmFsdWVzID0gZGF0YWJhc2VWYWx1ZXM7XG4gICAgICAgICAgICBcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgb25DaGFuZ2VJbnB1dCA9IChldmVudCkgPT4ge1xuXG4gICAgICAgIC8vIExhIHZhcmlhYmxlIHNlYXJjaCB2YSBjb250ZW5pciBsYSBub3V2ZWxsZSBjaGHDrm5lIMOgIHJlY2hlcmNoZXJcbiAgICAgICAgbGV0IHNlYXJjaCA9IGV2ZW50LnRhcmdldC52YWx1ZS50cmltKCk7XG4gICAgICAgIGNvbnNvbGUubG9nKHNlYXJjaCk7XG4gICAgICAgIGxldCBzZWFyY2hSZXN1bHRzID0gW107XG5cbiAgICAgICAgLy8gRW5yZWdpc3RyZW1lbnQgZGUgbGEgc2Fpc2llIGRlIGwndXRpbGlzYXRldXJcbiAgICAgICAgdGhpcy5zZXRTdGF0ZSh7IHNlYXJjaDogZXZlbnQudGFyZ2V0LnZhbHVlIH0pO1xuXG4gICAgICAgIC8vIFkgYSB0J2lsIHVuZSBzYWlzaWUgdmFsYWJsZSA/XG4gICAgICAgIGlmKHNlYXJjaC5sZW5ndGggPT0gMCkge1xuICAgICAgICAgICAgLy8gTm9uLCBlZmZhY2UgbGVzIHLDqXN1bHRhdHMgZGUgbGEgcmVjaGVyY2hlXG4gICAgICAgICAgICB0aGlzLnNldFN0YXRlKHsgc2VhcmNoUmVzdWx0czogW10gfSk7XG5cbiAgICAgICAgICAgIC8vIE9uIHF1aXR0ZSBpbW3DqWRpYXRlbWVudFxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgZm9yKGNvbnN0IHZhbHVlIG9mIHRoaXMuZGF0YWJhc2VWYWx1ZXMpIHtcblxuICAgICAgICAgICAgLypcbiAgICAgICAgICAgICAqIFbDqXJpZmllciBzaSBsYSB2YWxldXIgZW4gYmFzZSBkZSBkb25uw6llcyAodmFsdWUpIGNvbnRpZW50IGxhIHNhaXNpZSBcbiAgICAgICAgICAgICAqIGRlIGwndXRpbGlzYXRldXIgKHNlYXJjaClcbiAgICAgICAgICAgICAqL1xuICAgICAgICAgICAgaWYodmFsdWUubmFtZS5pbmNsdWRlcyhzZWFyY2gpID09IHRydWUpIHtcbiAgICAgICAgICAgICAgICBzZWFyY2hSZXN1bHRzLnB1c2godmFsdWUubmFtZSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICAvLyBzZWFyY2hSZXN1bHRzID0gc2VhcmNoUmVzdWx0cy5tYXAoKHNlYXJjaFJlc3VsdCkgPT4gPHA+eyBzZWFyY2hSZXN1bHQgfTwvcD4pO1xuICAgICAgICBzZWFyY2hSZXN1bHRzID0gc2VhcmNoUmVzdWx0cy5tYXAoKHNlYXJjaFJlc3VsdCwgaW5kZXgpID0+IHtcblxuICAgICAgICAgICAgcmV0dXJuIDxwIGtleT17IGluZGV4IH0+eyBzZWFyY2hSZXN1bHQgfTwvcD5cbiAgICAgICAgfSk7XG5cbiAgICAgICAgdGhpcy5zZXRTdGF0ZSh7IHNlYXJjaFJlc3VsdHM6IHNlYXJjaFJlc3VsdHMgfSk7XG4gICAgfVxuXG4gICAgb25TdWJtaXQgPSAoZXZlbnQpID0+IHtcblxuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgIH1cblxuICAgIHJlbmRlcigpIHtcbiAgICAgICAgcmV0dXJuKFxuICAgICAgICAgICAgPGZvcm0gb25TdWJtaXQ9eyB0aGlzLm9uU3VibWl0IH0+XG4gICAgICAgICAgICAgICAgPGlucHV0IG9uQ2hhbmdlPXsgdGhpcy5vbkNoYW5nZUlucHV0IH0gdmFsdWU9eyB0aGlzLnN0YXRlLnNlYXJjaCB9IC8+XG4gICAgICAgICAgICAgICAgeyB0aGlzLnN0YXRlLnNlYXJjaFJlc3VsdHMubGVuZ3RoID4gMCAmJlxuICAgICAgICAgICAgICAgICAgICA8YXJ0aWNsZSBjbGFzc05hbWU9XCJzZWFyY2gtcmVzdWx0cyBteS0zXCI+eyB0aGlzLnN0YXRlLnNlYXJjaFJlc3VsdHMgfTwvYXJ0aWNsZT5cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICA8L2Zvcm0+XG4gICAgICAgICk7XG4gICAgfVxufSIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJzb3VyY2VSb290IjoiIn0=