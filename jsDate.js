/*
Name: jsDate
Desc: VBScript native Date functions emulated for Javascript
Author: Rob Eberhardt, Slingshot Solutions - http://slingfive.com/
Note: see jsDate.txt for more info
*/

/*
I (Gabe) modified it to fit my needs better
  1. Changed DateDiff to return an object of all calculated offsets
  2. Removed any functions I wasn't using
*/

// constants
vbGeneralDate=0; vbLongDate=1; vbShortDate=2; vbLongTime=3; vbShortTime=4;  // NamedFormat
vbUseSystemDayOfWeek=0; vbSunday=1; vbMonday=2; vbTuesday=3; vbWednesday=4; vbThursday=5; vbFriday=6; vbSaturday=7;	// FirstDayOfWeek
vbUseSystem=0; vbFirstJan1=1; vbFirstFourDays=2; vbFirstFullWeek=3;	// FirstWeekOfYear



Date.IsDate = function(p_Expression){
	return !isNaN(new Date(p_Expression));		// <-- review further
}

Date.CDate = function(p_Date){
	if(Date.IsDate(p_Date)){ return new Date(p_Date); }

	var strTry = p_Date.replace(/\-/g, '/').replace(/\./g, '/').replace(/ /g, '/');	// fix separators
	strTry = strTry.replace(/pm$/i, " pm").replace(/am$/i, " am");	// and meridian spacing
	if(Date.IsDate(strTry)){ return new Date(strTry); }

	var strTryYear = strTry + '/' + new Date().getFullYear();	// append year
	if(Date.IsDate(strTryYear)){ return new Date(strTryYear); }
	

	if(strTry.indexOf(":")){	// if appears to have time
		var strTryYear2 = strTry.replace(/ /, '/' + new Date().getFullYear() + ' ');	// insert year
		if(Date.IsDate(strTryYear2)){ return new Date(strTryYear2); }

		var strTryDate = new Date().toDateString() + ' ' + p_Date;	// pre-pend current date
		if(Date.IsDate(strTryDate)){ return new Date(strTryDate); }
	}
	
	return false;	// double as looser IsDate
	//throw("Error #13 - Type mismatch");	// or is this better? 
}



Date.DateDiff = function(p_Date1, p_Date2, p_FirstDayOfWeek){
    p_Interval = "ms";
	if(!Date.CDate(p_Date1)){	return "invalid date: '" + p_Date1 + "'";	}
	if(!Date.CDate(p_Date2)){	return "invalid date: '" + p_Date2 + "'";	}
	p_FirstDayOfWeek = (isNaN(p_FirstDayOfWeek) || p_FirstDayOfWeek==0) ? vbSunday : parseInt(p_FirstDayOfWeek);	// set default & cast

	var dt1 = Date.CDate(p_Date1);
	var dt2 = Date.CDate(p_Date2);

	// correct DST-affected intervals ("d" & bigger)
    if(p_Date1.toString().indexOf(":") ==-1){ dt1.setUTCHours(0,0,0,0) };	// no time, assume 12am
    if(p_Date2.toString().indexOf(":") ==-1){ dt2.setUTCHours(0,0,0,0) };	// no time, assume 12am


	// get ms between UTC dates and make into "difference" date
	var iDiffMS = dt2.valueOf() - dt1.valueOf();
	var dtDiff = new Date(iDiffMS);

	// calc various diffs
	var nYears  = dt2.getUTCFullYear() - dt1.getUTCFullYear();
	var nMonths = dt2.getUTCMonth() - dt1.getUTCMonth() + (nYears!=0 ? nYears*12 : 0);
	var nQuarters = parseInt(nMonths / 3);	//<<-- different than VBScript, which watches rollover not completion
	
	var nMilliseconds = iDiffMS;
	var nSeconds = parseInt(iDiffMS / 1000);
	var nMinutes = parseInt(nSeconds / 60);
	var nHours = parseInt(nMinutes / 60);
	var nDays  = parseInt(nHours / 24);	// <-- now fixed for DST switch days
	var nWeeks = parseInt(nDays / 7);
	
	
	// return difference
    return {
        "yyyy": nYears,
		"q": nQuarters,
		"m": nMonths,
		"d": nDays,
		"w": nWeeks,
		"h": nHours,
		"n": nMinutes,
		"s": nSeconds,
		"ms": nMilliseconds
	};
}
