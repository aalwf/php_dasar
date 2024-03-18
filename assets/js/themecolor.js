const handleThemeUpdate = (cssVars) => {
    const root = document.querySelector(':root');
    const keys = Object.keys(cssVars);
    keys.forEach(key => {
        root.style.setProperty(key, cssVars[key]);
    });
}

function dynamicPrimaryColor(primaryColor) {
    'use strict'
    
    primaryColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName = `--primary-${e.target.getAttribute('data-id')}`;
            const cssPropName1 = `--primary-${e.target.getAttribute('data-id1')}`;
            const cssPropName2 = `--primary-${e.target.getAttribute('data-id2')}`;
            handleThemeUpdate({
                [cssPropName]: e.target.value,
                // 95 is used as the opacity 0.95  
                [cssPropName1]: e.target.value + 95,
                [cssPropName2]: e.target.value,
            });
        });
    });
}
function dynamicBackgroundColor(BackgroundColor) {
    'use strict'
    
    BackgroundColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName = `--dark-${e.target.getAttribute('data-id3')}`;
            const cssPropName1 = `--dark-${e.target.getAttribute('data-id4')}`;
            handleThemeUpdate({
                [cssPropName]: e.target.value + 'dd',
                [cssPropName1]: e.target.value,
            });
        });
    });
}

(function() {
    'use strict'

    // Light theme color picker 
    const dynamicPrimaryLight = document.querySelectorAll('input.color-primary-light');
    const dynamicBgColor = document.querySelectorAll('input.background-primary-light');

    // themeSwitch(LightThemeSwitchers);
    dynamicPrimaryColor(dynamicPrimaryLight);
    dynamicBackgroundColor(dynamicBgColor);

    localStorageBackup();
        
})();

function localStorageBackup() {
    'use strict'

    // if there is a value stored, update color picker and background color
    // Used to retrive the data from local storage
    if (localStorage.aziraprimaryColor) {
        // document.getElementById('colorID').value = localStorage.aziraprimaryColor;
        document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.aziraprimaryColor);
        document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.aziraprimaryHoverColor);
        document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.aziraprimaryBorderColor);
    }
    
    if (localStorage.azirabgColor) {
        document.body.classList.add('dark-theme');
        document.body.classList.remove('light-theme');
        $('#myonoffswitch2').prop('checked', true);
        $('#myonoffswitch5').prop('checked', true);
        $('#myonoffswitch8').prop('checked', true);
        // document.getElementById('bgID').value = localStorage.azirathemeColor;
        document.querySelector('html').style.setProperty('--dark-body', localStorage.azirabgColor);
        document.querySelector('html').style.setProperty('--dark-theme', localStorage.azirathemeColor);
    }
    if(localStorage.aziralightMode){
        document.querySelector('body')?.classList.add('light-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
        $('#myonoffswitch1').prop('checked', true);
        $('#myonoffswitch3').prop('checked', true);
        $('#myonoffswitch6').prop('checked', true);
    }
    if(localStorage.azirahorizontal){
        document.querySelector('body').classList.add('horizontal')
    }
    if(localStorage.azirahorizontalHover){
        document.querySelector('body').classList.add('horizontal-hover')
    }
    if(localStorage.azirartl){
        document.querySelector('body').classList.add('rtl')
    }
    
    if(localStorage.aziraclosedmenu){
        document.querySelector('body').classList.add('closed-menu')
    }

    if(localStorage.aziraicontextmenu){
        document.querySelector('body').classList.add('icontext-menu')
    }

    if(localStorage.azirasideiconmenu){
        document.querySelector('body').classList.add('sideicon-menu')
    }

    if(localStorage.azirahoversubmenu){
        document.querySelector('body').classList.add('hover-submenu')
    }

    if(localStorage.azirahoversubmenu1){
        document.querySelector('body').classList.add('hover-submenu1')
    }

    if(localStorage.azirabodystyle){
        document.querySelector('body').classList.add('body-style1')
    }

    if(localStorage.aziraboxedwidth){
        document.querySelector('body').classList.add('layout-boxed')
    }

    if(localStorage.azirascrollable){
        document.querySelector('body').classList.add('scrollable-layout')
    }

    if(localStorage.aziralightmenu){
        document.querySelector('body').classList.add('light-menu')
    }

    if(localStorage.aziracolormenu){
        document.querySelector('body').classList.add('color-menu')
    }

    if(localStorage.aziragradientmenu){
        document.querySelector('body').classList.add('gradient-menu')
    }

    if(localStorage.aziradarkmenu){
        document.querySelector('body').classList.add('dark-menu')
    }

    if(localStorage.aziralightheader){
        document.querySelector('body').classList.add('light-header')
    }


    if(localStorage.aziragradientheader){
        document.querySelector('body').classList.add('gradient-header')
    }

    if(localStorage.aziracolorheader){
        document.querySelector('body').classList.add('color-header')
    }

    if(localStorage.aziradarkheader){
        document.querySelector('body').classList.add('dark-header')
    }
	// Boxed style
	if (document.querySelector('body').classList.contains('layout-boxed')) {
		$('#myonoffswitch10').prop('checked', true);
	}
	// scrollable-layout style
	if (document.querySelector('body').classList.contains('scrollable-layout')) {
		$('#myonoffswitch12').prop('checked', true);
	}
	// closed-menu style
	if (document.querySelector('body').classList.contains('closed-menu')) {
		$('#myonoffswitch30').prop('checked', true);
	}
	// icontext-menu style
	if (document.querySelector('body').classList.contains('icontext-menu')) {
		$('#myonoffswitch14').prop('checked', true);
	}
	// iconoverlay-menu style
	if (document.querySelector('body').classList.contains('sideicon-menu')) {
		$('#myonoffswitch15').prop('checked', true);
	}
	// hover-submenu style
	if (document.querySelector('body').classList.contains('hover-submenu')) {
		$('#myonoffswitch32').prop('checked', true);
	}
	// hover-submenu1 style
	if (document.querySelector('body').classList.contains('hover-submenu1')) {
		$('#myonoffswitch33').prop('checked', true);
	}
}

// triggers on changing the color picker
function changePrimaryColor() {
    'use strict';
    checkOptions();

    var userColor = document.getElementById('colorID').value;
    localStorage.setItem('aziraprimaryColor', userColor);
    // to store value as opacity 0.95 we use 95
    localStorage.setItem('aziraprimaryHoverColor', userColor + 95);
    localStorage.setItem('aziraprimaryBorderColor', userColor);

    names()
}
// triggers on changing the color picker
function changeBackgroundColor() {

    var userColor = document.getElementById('bgID').value;
    localStorage.setItem('azirabgColor', userColor + 'dd');
    localStorage.setItem('azirathemeColor', userColor);
    names()
  
    document.body.classList.add('dark-theme');
    document.body.classList.remove('light-theme');
    $('#myonoffswitch2').prop('checked', true);
    $('#myonoffswitch5').prop('checked', true);
    $('#myonoffswitch8').prop('checked', true);
  
    localStorage.setItem("aziradarkMode", true);
    names();
  }
  

// to check the value is hexa or not
const isValidHex = (hexValue) => /^#([A-Fa-f0-9]{3,4}){1,2}$/.test(hexValue)

const getChunksFromString = (st, chunkSize) => st.match(new RegExp(`.{${chunkSize}}`, "g"))
    // convert hex value to 256
const convertHexUnitTo256 = (hexStr) => parseInt(hexStr.repeat(2 / hexStr.length), 16)
    // get alpha value is equla to 1 if there was no value is asigned to alpha in function
const getAlphafloat = (a, alpha) => {
        if (typeof a !== "undefined") { return a / 255 }
        if ((typeof alpha != "number") || alpha < 0 || alpha > 1) {
            return 1
        }
        return alpha
    }
    // convertion of hex code to rgba code 
function hexToRgba(hexValue, alpha) {
    'use strict'

    if (!isValidHex(hexValue)) { return null }
    const chunkSize = Math.floor((hexValue.length - 1) / 3)
    const hexArr = getChunksFromString(hexValue.slice(1), chunkSize)
    const [r, g, b, a] = hexArr.map(convertHexUnitTo256)
    return `rgba(${r}, ${g}, ${b}, ${getAlphafloat(a, alpha)})`
}


let myVarVal

function names() {
    'use strict'

    let primaryColorVal = getComputedStyle(document.documentElement).getPropertyValue('--primary-bg-color').trim();

    //get variable
    myVarVal = localStorage.getItem("aziraprimaryColor")  || primaryColorVal;
    // index charts
    if(document.querySelector('#chartDonut') !== null){
        chart();
    }
    if(document.querySelector('#project-budget') !== null){
        project();
    }
    if(document.querySelector('#sparkel1') !== null){
        sparkel();
    }

    let colorData1 = hexToRgba(myVarVal || primaryColorVal , 0.1)
    document.querySelector('html').style.setProperty('--primary01', colorData1);

    let colorData2 = hexToRgba(myVarVal || primaryColorVal , 0.2)
    document.querySelector('html').style.setProperty('--primary02', colorData2);

    let colorData3 = hexToRgba(myVarVal || primaryColorVal , 0.3)
    document.querySelector('html').style.setProperty('--primary03', colorData3);

    let colorData4 = hexToRgba(myVarVal || primaryColorVal , 0.4)
    document.querySelector('html').style.setProperty('--primary04', colorData4);

    let colorData5 = hexToRgba(myVarVal || primaryColorVal , 0.5)
    document.querySelector('html').style.setProperty('--primary05', colorData5);

    let colorData6 = hexToRgba(myVarVal || primaryColorVal , 0.6)
    document.querySelector('html').style.setProperty('--primary06', colorData6);

    let colorData7 = hexToRgba(myVarVal || primaryColorVal , 0.7)
    document.querySelector('html').style.setProperty('--primary07', colorData7);

    let colorData8 = hexToRgba(myVarVal || primaryColorVal , 0.8)
    document.querySelector('html').style.setProperty('--primary08', colorData8);

    let colorData9 = hexToRgba(myVarVal || primaryColorVal , 0.9)
    document.querySelector('html').style.setProperty('--primary09', colorData9);

    let colorData05 = hexToRgba(myVarVal || primaryColorVal , 0.05)
    document.querySelector('html').style.setProperty('--primary005', colorData05);

}

names()

