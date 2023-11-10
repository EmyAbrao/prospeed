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

/***/ "./resources/assets/vendor/libs/formvalidation/dist/js/locales/fi_FI.js":
/*!******************************************************************************!*\
  !*** ./resources/assets/vendor/libs/formvalidation/dist/js/locales/fi_FI.js ***!
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
   * Finnish language package
   * Translated by @traone
   */
  var fi_FI = {
    base64: {
      "default": 'Ole hyvä anna kelvollinen base64 koodattu merkkijono'
    },
    between: {
      "default": 'Ole hyvä anna arvo %s ja %s väliltä',
      notInclusive: 'Ole hyvä anna arvo %s ja %s väliltä'
    },
    bic: {
      "default": 'Ole hyvä anna kelvollinen BIC numero'
    },
    callback: {
      "default": 'Ole hyvä anna kelvollinen arvo'
    },
    choice: {
      between: 'Ole hyvä valitse %s - %s valintaa',
      "default": 'Ole hyvä anna kelvollinen arvo',
      less: 'Ole hyvä valitse vähintään %s valintaa',
      more: 'Ole hyvä valitse enintään %s valintaa'
    },
    color: {
      "default": 'Ole hyvä anna kelvollinen väriarvo'
    },
    creditCard: {
      "default": 'Ole hyvä anna kelvollinen luottokortin numero'
    },
    cusip: {
      "default": 'Ole hyvä anna kelvollinen CUSIP numero'
    },
    date: {
      "default": 'Ole hyvä anna kelvollinen päiväys',
      max: 'Ole hyvä anna %s edeltävä päiväys',
      min: 'Ole hyvä anna %s jälkeinen päiväys',
      range: 'Ole hyvä anna päiväys %s - %s väliltä'
    },
    different: {
      "default": 'Ole hyvä anna jokin toinen arvo'
    },
    digits: {
      "default": 'Vain numerot sallittuja'
    },
    ean: {
      "default": 'Ole hyvä anna kelvollinen EAN numero'
    },
    ein: {
      "default": 'Ole hyvä anna kelvollinen EIN numero'
    },
    emailAddress: {
      "default": 'Ole hyvä anna kelvollinen sähköpostiosoite'
    },
    file: {
      "default": 'Ole hyvä valitse kelvollinen tiedosto'
    },
    greaterThan: {
      "default": 'Ole hyvä anna arvoksi yhtä suuri kuin, tai suurempi kuin %s',
      notInclusive: 'Ole hyvä anna arvoksi suurempi kuin %s'
    },
    grid: {
      "default": 'Ole hyvä anna kelvollinen GRId numero'
    },
    hex: {
      "default": 'Ole hyvä anna kelvollinen heksadesimaali luku'
    },
    iban: {
      countries: {
        AD: 'Andorra',
        AE: 'Yhdistyneet arabiemiirikunnat',
        AL: 'Albania',
        AO: 'Angola',
        AT: 'Itävalta',
        AZ: 'Azerbaidžan',
        BA: 'Bosnia ja Hertsegovina',
        BE: 'Belgia',
        BF: 'Burkina Faso',
        BG: 'Bulgaria',
        BH: 'Bahrain',
        BI: 'Burundi',
        BJ: 'Benin',
        BR: 'Brasilia',
        CH: 'Sveitsi',
        CI: 'Norsunluurannikko',
        CM: 'Kamerun',
        CR: 'Costa Rica',
        CV: 'Cape Verde',
        CY: 'Kypros',
        CZ: 'Tsekin tasavalta',
        DE: 'Saksa',
        DK: 'Tanska',
        DO: 'Dominikaaninen tasavalta',
        DZ: 'Algeria',
        EE: 'Viro',
        ES: 'Espanja',
        FI: 'Suomi',
        FO: 'Färsaaret',
        FR: 'Ranska',
        GB: 'Yhdistynyt kuningaskunta',
        GE: 'Georgia',
        GI: 'Gibraltar',
        GL: 'Grönlanti',
        GR: 'Kreikka',
        GT: 'Guatemala',
        HR: 'Kroatia',
        HU: 'Unkari',
        IE: 'Irlanti',
        IL: 'Israel',
        IR: 'Iran',
        IS: 'Islanti',
        IT: 'Italia',
        JO: 'Jordan',
        KW: 'Kuwait',
        KZ: 'Kazakhstan',
        LB: 'Libanon',
        LI: 'Liechtenstein',
        LT: 'Liettua',
        LU: 'Luxembourg',
        LV: 'Latvia',
        MC: 'Monaco',
        MD: 'Moldova',
        ME: 'Montenegro',
        MG: 'Madagascar',
        MK: 'Makedonia',
        ML: 'Mali',
        MR: 'Mauritania',
        MT: 'Malta',
        MU: 'Mauritius',
        MZ: 'Mozambik',
        NL: 'Hollanti',
        NO: 'Norja',
        PK: 'Pakistan',
        PL: 'Puola',
        PS: 'Palestiina',
        PT: 'Portugali',
        QA: 'Qatar',
        RO: 'Romania',
        RS: 'Serbia',
        SA: 'Saudi Arabia',
        SE: 'Ruotsi',
        SI: 'Slovenia',
        SK: 'Slovakia',
        SM: 'San Marino',
        SN: 'Senegal',
        TL: 'Itä-Timor',
        TN: 'Tunisia',
        TR: 'Turkki',
        VG: 'Neitsytsaaret, Brittien',
        XK: 'Kosovon tasavallan'
      },
      country: 'Ole hyvä anna kelvollinen IBAN numero maassa %s',
      "default": 'Ole hyvä anna kelvollinen IBAN numero'
    },
    id: {
      countries: {
        BA: 'Bosnia ja Hertsegovina',
        BG: 'Bulgaria',
        BR: 'Brasilia',
        CH: 'Sveitsi',
        CL: 'Chile',
        CN: 'Kiina',
        CZ: 'Tsekin tasavalta',
        DK: 'Tanska',
        EE: 'Viro',
        ES: 'Espanja',
        FI: 'Suomi',
        HR: 'Kroatia',
        IE: 'Irlanti',
        IS: 'Islanti',
        LT: 'Liettua',
        LV: 'Latvia',
        ME: 'Montenegro',
        MK: 'Makedonia',
        NL: 'Hollanti',
        PL: 'Puola',
        RO: 'Romania',
        RS: 'Serbia',
        SE: 'Ruotsi',
        SI: 'Slovenia',
        SK: 'Slovakia',
        SM: 'San Marino',
        TH: 'Thaimaa',
        TR: 'Turkki',
        ZA: 'Etelä Afrikka'
      },
      country: 'Ole hyvä anna kelvollinen henkilötunnus maassa %s',
      "default": 'Ole hyvä anna kelvollinen henkilötunnus'
    },
    identical: {
      "default": 'Ole hyvä anna sama arvo'
    },
    imei: {
      "default": 'Ole hyvä anna kelvollinen IMEI numero'
    },
    imo: {
      "default": 'Ole hyvä anna kelvollinen IMO numero'
    },
    integer: {
      "default": 'Ole hyvä anna kelvollinen kokonaisluku'
    },
    ip: {
      "default": 'Ole hyvä anna kelvollinen IP osoite',
      ipv4: 'Ole hyvä anna kelvollinen IPv4 osoite',
      ipv6: 'Ole hyvä anna kelvollinen IPv6 osoite'
    },
    isbn: {
      "default": 'Ole hyvä anna kelvollinen ISBN numero'
    },
    isin: {
      "default": 'Ole hyvä anna kelvollinen ISIN numero'
    },
    ismn: {
      "default": 'Ole hyvä anna kelvollinen ISMN numero'
    },
    issn: {
      "default": 'Ole hyvä anna kelvollinen ISSN numero'
    },
    lessThan: {
      "default": 'Ole hyvä anna arvo joka on vähemmän kuin tai yhtä suuri kuin %s',
      notInclusive: 'Ole hyvä anna arvo joka on vähemmän kuin %s'
    },
    mac: {
      "default": 'Ole hyvä anna kelvollinen MAC osoite'
    },
    meid: {
      "default": 'Ole hyvä anna kelvollinen MEID numero'
    },
    notEmpty: {
      "default": 'Pakollinen kenttä, anna jokin arvo'
    },
    numeric: {
      "default": 'Ole hyvä anna kelvollinen liukuluku'
    },
    phone: {
      countries: {
        AE: 'Yhdistyneet arabiemiirikunnat',
        BG: 'Bulgaria',
        BR: 'Brasilia',
        CN: 'Kiina',
        CZ: 'Tsekin tasavalta',
        DE: 'Saksa',
        DK: 'Tanska',
        ES: 'Espanja',
        FR: 'Ranska',
        GB: 'Yhdistynyt kuningaskunta',
        IN: 'Intia',
        MA: 'Marokko',
        NL: 'Hollanti',
        PK: 'Pakistan',
        RO: 'Romania',
        RU: 'Venäjä',
        SK: 'Slovakia',
        TH: 'Thaimaa',
        US: 'USA',
        VE: 'Venezuela'
      },
      country: 'Ole hyvä anna kelvollinen puhelinnumero maassa %s',
      "default": 'Ole hyvä anna kelvollinen puhelinnumero'
    },
    promise: {
      "default": 'Ole hyvä anna kelvollinen arvo'
    },
    regexp: {
      "default": 'Ole hyvä anna kaavan mukainen arvo'
    },
    remote: {
      "default": 'Ole hyvä anna kelvollinen arvo'
    },
    rtn: {
      "default": 'Ole hyvä anna kelvollinen RTN numero'
    },
    sedol: {
      "default": 'Ole hyvä anna kelvollinen SEDOL numero'
    },
    siren: {
      "default": 'Ole hyvä anna kelvollinen SIREN numero'
    },
    siret: {
      "default": 'Ole hyvä anna kelvollinen SIRET numero'
    },
    step: {
      "default": 'Ole hyvä anna kelvollinen arvo %s porrastettuna'
    },
    stringCase: {
      "default": 'Ole hyvä anna pelkästään pieniä kirjaimia',
      upper: 'Ole hyvä anna pelkästään isoja kirjaimia'
    },
    stringLength: {
      between: 'Ole hyvä anna arvo joka on vähintään %s ja enintään %s merkkiä pitkä',
      "default": 'Ole hyvä anna kelvollisen mittainen merkkijono',
      less: 'Ole hyvä anna vähemmän kuin %s merkkiä',
      more: 'Ole hyvä anna vähintään %s merkkiä'
    },
    uri: {
      "default": 'Ole hyvä anna kelvollinen URI'
    },
    uuid: {
      "default": 'Ole hyvä anna kelvollinen UUID numero',
      version: 'Ole hyvä anna kelvollinen UUID versio %s numero'
    },
    vat: {
      countries: {
        AT: 'Itävalta',
        BE: 'Belgia',
        BG: 'Bulgaria',
        BR: 'Brasilia',
        CH: 'Sveitsi',
        CY: 'Kypros',
        CZ: 'Tsekin tasavalta',
        DE: 'Saksa',
        DK: 'Tanska',
        EE: 'Viro',
        EL: 'Kreikka',
        ES: 'Espanja',
        FI: 'Suomi',
        FR: 'Ranska',
        GB: 'Yhdistyneet kuningaskunnat',
        GR: 'Kreikka',
        HR: 'Kroatia',
        HU: 'Unkari',
        IE: 'Irlanti',
        IS: 'Islanti',
        IT: 'Italia',
        LT: 'Liettua',
        LU: 'Luxemburg',
        LV: 'Latvia',
        MT: 'Malta',
        NL: 'Hollanti',
        NO: 'Norja',
        PL: 'Puola',
        PT: 'Portugali',
        RO: 'Romania',
        RS: 'Serbia',
        RU: 'Venäjä',
        SE: 'Ruotsi',
        SI: 'Slovenia',
        SK: 'Slovakia',
        VE: 'Venezuela',
        ZA: 'Etelä Afrikka'
      },
      country: 'Ole hyvä anna kelvollinen VAT numero maahan: %s',
      "default": 'Ole hyvä anna kelvollinen VAT numero'
    },
    vin: {
      "default": 'Ole hyvä anna kelvollinen VIN numero'
    },
    zipCode: {
      countries: {
        AT: 'Itävalta',
        BG: 'Bulgaria',
        BR: 'Brasilia',
        CA: 'Kanada',
        CH: 'Sveitsi',
        CZ: 'Tsekin tasavalta',
        DE: 'Saksa',
        DK: 'Tanska',
        ES: 'Espanja',
        FR: 'Ranska',
        GB: 'Yhdistyneet kuningaskunnat',
        IE: 'Irlanti',
        IN: 'Intia',
        IT: 'Italia',
        MA: 'Marokko',
        NL: 'Hollanti',
        PL: 'Puola',
        PT: 'Portugali',
        RO: 'Romania',
        RU: 'Venäjä',
        SE: 'Ruotsi',
        SG: 'Singapore',
        SK: 'Slovakia',
        US: 'USA'
      },
      country: 'Ole hyvä anna kelvollinen postinumero maassa: %s',
      "default": 'Ole hyvä anna kelvollinen postinumero'
    }
  };
  return fi_FI;
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
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/vendor/libs/formvalidation/dist/js/locales/fi_FI.js");
/******/ 	
/******/ 	return __webpack_exports__;
/******/ })()
;
});