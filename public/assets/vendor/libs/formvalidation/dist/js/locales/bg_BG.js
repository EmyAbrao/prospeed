(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
})(self, () => {
return /******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/vendor/libs/formvalidation/dist/js/locales/bg_BG.js":
/*!******************************************************************************!*\
  !*** ./resources/assets/vendor/libs/formvalidation/dist/js/locales/bg_BG.js ***!
  \******************************************************************************/
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
(function (global, factory) {
  ( false ? 0 : _typeof(exports)) === 'object' && "object" !== 'undefined' ? module.exports = factory() :  true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
		__WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : (0);
})(this, function () {
  'use strict';

  /**
   * Bulgarian language package
   * Translated by @mraiur
   */
  var bg_BG = {
    base64: {
      "default": 'Моля, въведете валиден base 64 кодиран'
    },
    between: {
      "default": 'Моля, въведете стойност между %s и %s',
      notInclusive: 'Моля, въведете стойност точно между %s и %s'
    },
    bic: {
      "default": 'Моля, въведете валиден BIC номер'
    },
    callback: {
      "default": 'Моля, въведете валидна стойност'
    },
    choice: {
      between: 'Моля изберете от %s до %s стойност',
      "default": 'Моля, въведете валидна стойност',
      less: 'Моля изберете минимална стойност %s',
      more: 'Моля изберете максимална стойност %s'
    },
    color: {
      "default": 'Моля, въведете валиден цвят'
    },
    creditCard: {
      "default": 'Моля, въведете валиден номер на кредитна карта'
    },
    cusip: {
      "default": 'Моля, въведете валиден CUSIP номер'
    },
    date: {
      "default": 'Моля, въведете валидна дата',
      max: 'Моля въведете дата преди %s',
      min: 'Моля въведете дата след %s',
      range: 'Моля въведете дата между %s и %s'
    },
    different: {
      "default": 'Моля, въведете различна стойност'
    },
    digits: {
      "default": 'Моля, въведете само цифри'
    },
    ean: {
      "default": 'Моля, въведете валиден EAN номер'
    },
    ein: {
      "default": 'Моля, въведете валиден EIN номер'
    },
    emailAddress: {
      "default": 'Моля, въведете валиден имейл адрес'
    },
    file: {
      "default": 'Моля, изберете валиден файл'
    },
    greaterThan: {
      "default": 'Моля, въведете стойност по-голяма от или равна на %s',
      notInclusive: 'Моля, въведете стойност по-голяма от %s'
    },
    grid: {
      "default": 'Моля, изберете валиден GRId номер'
    },
    hex: {
      "default": 'Моля, въведете валиден шестнадесетичен номер'
    },
    iban: {
      countries: {
        AD: 'Андора',
        AE: 'Обединени арабски емирства',
        AL: 'Албания',
        AO: 'Ангола',
        AT: 'Австрия',
        AZ: 'Азербайджан',
        BA: 'Босна и Херцеговина',
        BE: 'Белгия',
        BF: 'Буркина Фасо',
        BG: 'България',
        BH: 'Бахрейн',
        BI: 'Бурунди',
        BJ: 'Бенин',
        BR: 'Бразилия',
        CH: 'Швейцария',
        CI: 'Ivory Coast',
        CM: 'Камерун',
        CR: 'Коста Рика',
        CV: 'Cape Verde',
        CY: 'Кипър',
        CZ: 'Чешката република',
        DE: 'Германия',
        DK: 'Дания',
        DO: 'Доминиканска република',
        DZ: 'Алжир',
        EE: 'Естония',
        ES: 'Испания',
        FI: 'Финландия',
        FO: 'Фарьорските острови',
        FR: 'Франция',
        GB: 'Обединеното кралство',
        GE: 'Грузия',
        GI: 'Гибралтар',
        GL: 'Гренландия',
        GR: 'Гърция',
        GT: 'Гватемала',
        HR: 'Хърватия',
        HU: 'Унгария',
        IE: 'Ирландия',
        IL: 'Израел',
        IR: 'Иран',
        IS: 'Исландия',
        IT: 'Италия',
        JO: 'Йордания',
        KW: 'Кувейт',
        KZ: 'Казахстан',
        LB: 'Ливан',
        LI: 'Лихтенщайн',
        LT: 'Литва',
        LU: 'Люксембург',
        LV: 'Латвия',
        MC: 'Монако',
        MD: 'Молдова',
        ME: 'Черна гора',
        MG: 'Мадагаскар',
        MK: 'Македония',
        ML: 'Мали',
        MR: 'Мавритания',
        MT: 'Малта',
        MU: 'Мавриций',
        MZ: 'Мозамбик',
        NL: 'Нидерландия',
        NO: 'Норвегия',
        PK: 'Пакистан',
        PL: 'Полша',
        PS: 'палестинска',
        PT: 'Португалия',
        QA: 'Катар',
        RO: 'Румъния',
        RS: 'Сърбия',
        SA: 'Саудитска Арабия',
        SE: 'Швеция',
        SI: 'Словения',
        SK: 'Словакия',
        SM: 'San Marino',
        SN: 'Сенегал',
        TL: 'Източен Тимор',
        TN: 'Тунис',
        TR: 'Турция',
        VG: 'Британски Вирджински острови',
        XK: 'Република Косово'
      },
      country: 'Моля, въведете валиден номер на IBAN в %s',
      "default": 'Моля, въведете валиден IBAN номер'
    },
    id: {
      countries: {
        BA: 'Босна и Херцеговина',
        BG: 'България',
        BR: 'Бразилия',
        CH: 'Швейцария',
        CL: 'Чили',
        CN: 'Китай',
        CZ: 'Чешката република',
        DK: 'Дания',
        EE: 'Естония',
        ES: 'Испания',
        FI: 'Финландия',
        HR: 'Хърватия',
        IE: 'Ирландия',
        IS: 'Исландия',
        LT: 'Литва',
        LV: 'Латвия',
        ME: 'Черна гора',
        MK: 'Македония',
        NL: 'Холандия',
        PL: 'Полша',
        RO: 'Румъния',
        RS: 'Сърбия',
        SE: 'Швеция',
        SI: 'Словения',
        SK: 'Словакия',
        SM: 'San Marino',
        TH: 'Тайланд',
        TR: 'Турция',
        ZA: 'Южна Африка'
      },
      country: 'Моля, въведете валиден идентификационен номер в %s',
      "default": 'Моля, въведете валиден идентификационен номер'
    },
    identical: {
      "default": 'Моля, въведете една и съща стойност'
    },
    imei: {
      "default": 'Моля, въведете валиден IMEI номер'
    },
    imo: {
      "default": 'Моля, въведете валиден IMO номер'
    },
    integer: {
      "default": 'Моля, въведете валиден номер'
    },
    ip: {
      "default": 'Моля, въведете валиден IP адрес',
      ipv4: 'Моля, въведете валиден IPv4 адрес',
      ipv6: 'Моля, въведете валиден IPv6 адрес'
    },
    isbn: {
      "default": 'Моля, въведете валиден ISBN номер'
    },
    isin: {
      "default": 'Моля, въведете валиден ISIN номер'
    },
    ismn: {
      "default": 'Моля, въведете валиден ISMN номер'
    },
    issn: {
      "default": 'Моля, въведете валиден ISSN номер'
    },
    lessThan: {
      "default": 'Моля, въведете стойност по-малка или равна на %s',
      notInclusive: 'Моля, въведете стойност по-малко от %s'
    },
    mac: {
      "default": 'Моля, въведете валиден MAC адрес'
    },
    meid: {
      "default": 'Моля, въведете валиден MEID номер'
    },
    notEmpty: {
      "default": 'Моля, въведете стойност'
    },
    numeric: {
      "default": 'Моля, въведете валидно число с плаваща запетая'
    },
    phone: {
      countries: {
        AE: 'Обединени арабски емирства',
        BG: 'България',
        BR: 'Бразилия',
        CN: 'Китай',
        CZ: 'Чешката република',
        DE: 'Германия',
        DK: 'Дания',
        ES: 'Испания',
        FR: 'Франция',
        GB: 'Обединеното кралство',
        IN: 'Индия',
        MA: 'Мароко',
        NL: 'Нидерландия',
        PK: 'Пакистан',
        RO: 'Румъния',
        RU: 'Русия',
        SK: 'Словакия',
        TH: 'Тайланд',
        US: 'САЩ',
        VE: 'Венецуела'
      },
      country: 'Моля, въведете валиден телефонен номер в %s',
      "default": 'Моля, въведете валиден телефонен номер'
    },
    promise: {
      "default": 'Моля, въведете валидна стойност'
    },
    regexp: {
      "default": 'Моля, въведете стойност, отговаряща на модела'
    },
    remote: {
      "default": 'Моля, въведете валидна стойност'
    },
    rtn: {
      "default": 'Моля, въведете валиде  RTN номер'
    },
    sedol: {
      "default": 'Моля, въведете валиден SEDOL номер'
    },
    siren: {
      "default": 'Моля, въведете валиден SIREN номер'
    },
    siret: {
      "default": 'Моля, въведете валиден SIRET номер'
    },
    step: {
      "default": 'Моля, въведете валиденa стъпка от %s'
    },
    stringCase: {
      "default": 'Моля, въведете само с малки букви',
      upper: 'Моля въведете само главни букви'
    },
    stringLength: {
      between: 'Моля, въведете стойност между %s и %s знака',
      "default": 'Моля, въведете стойност с валидни дължина',
      less: 'Моля, въведете по-малко от %s знака',
      more: 'Моля въведете повече от %s знака'
    },
    uri: {
      "default": 'Моля, въведете валиден URI'
    },
    uuid: {
      "default": 'Моля, въведете валиден UUID номер',
      version: 'Моля, въведете валиден UUID номер с версия %s'
    },
    vat: {
      countries: {
        AT: 'Австрия',
        BE: 'Белгия',
        BG: 'България',
        BR: 'Бразилия',
        CH: 'Швейцария',
        CY: 'Кипър',
        CZ: 'Чешката република',
        DE: 'Германия',
        DK: 'Дания',
        EE: 'Естония',
        EL: 'Гърция',
        ES: 'Испания',
        FI: 'Финландия',
        FR: 'Франция',
        GB: 'Обединеното кралство',
        GR: 'Гърция',
        HR: 'Ирландия',
        HU: 'Унгария',
        IE: 'Ирландски',
        IS: 'Исландия',
        IT: 'Италия',
        LT: 'Литва',
        LU: 'Люксембург',
        LV: 'Латвия',
        MT: 'Малта',
        NL: 'Холандия',
        NO: 'Норвегия',
        PL: 'Полша',
        PT: 'Португалия',
        RO: 'Румъния',
        RS: 'Сърбия',
        RU: 'Русия',
        SE: 'Швеция',
        SI: 'Словения',
        SK: 'Словакия',
        VE: 'Венецуела',
        ZA: 'Южна Африка'
      },
      country: 'Моля, въведете валиден ДДС в %s',
      "default": 'Моля, въведете валиден ДДС'
    },
    vin: {
      "default": 'Моля, въведете валиден номер VIN'
    },
    zipCode: {
      countries: {
        AT: 'Австрия',
        BG: 'България',
        BR: 'Бразилия',
        CA: 'Канада',
        CH: 'Швейцария',
        CZ: 'Чешката република',
        DE: 'Германия',
        DK: 'Дания',
        ES: 'Испания',
        FR: 'Франция',
        GB: 'Обединеното кралство',
        IE: 'Ирландски',
        IN: 'Индия',
        IT: 'Италия',
        MA: 'Мароко',
        NL: 'Холандия',
        PL: 'Полша',
        PT: 'Португалия',
        RO: 'Румъния',
        RU: 'Русия',
        SE: 'Швеция',
        SG: 'Сингапур',
        SK: 'Словакия',
        US: 'САЩ'
      },
      country: 'Моля, въведете валиден пощенски код в %s',
      "default": 'Моля, въведете валиден пощенски код'
    }
  };
  return bg_BG;
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/vendor/libs/formvalidation/dist/js/locales/bg_BG.js");
/******/ 	
/******/ 	return __webpack_exports__;
/******/ })()
;
});