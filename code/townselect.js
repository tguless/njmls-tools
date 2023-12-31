
	// ---------------
	// Form Validation
	// ---------------


	function save(theForm) {

		//f_saveselectbox(theForm.partnerConversionTypes, theForm.name);
		f_save_full(theForm.selectedValues, selected_conversions)
		//alert(theForm.selectedValues.value);
		//theForm.submitButton.value = "submit";

		theForm.submit();
	}


	function reset(theForm) {
		theForm.reset();
	}

	function f_add(){
		s_pool =  window.document.partnerConversionTypesForm.conversionTypesPool;
		s_selected = window.document.partnerConversionTypesForm.partnerConversionTypes;
		s_mediatype = window.document.partnerConversionTypesForm.mediatype;
		mediaType = f_arraymove(conversions,  s_pool, selected_conversions  , s_selected);
		//f_populate_full(s_selected, selected_conversions);
		change_media(s_mediatype);

	}
	
	function f_addall(){
		
		var iter;
		s_pool =  window.document.partnerConversionTypesForm.conversionTypesPool;
		s_selected = window.document.partnerConversionTypesForm.partnerConversionTypes;
		s_mediatype = window.document.partnerConversionTypesForm.mediatype;
		
		var initialSize = s_pool.length;		
		for (iter=0;iter<initialSize-1;iter++){
			s_pool.selectedIndex = s_pool.length-2;
			mediaType = f_arraymove(conversions,  s_pool, selected_conversions  , s_selected);
		
		}
		change_media(s_mediatype);
	}

	function f_dropall(){
		var iter;
		s_pool =  window.document.partnerConversionTypesForm.conversionTypesPool;
		s_selected = window.document.partnerConversionTypesForm.partnerConversionTypes;
		s_mediatype = window.document.partnerConversionTypesForm.mediatype;
		
		var initialSize = s_selected.length;		
		for (iter=0;iter<initialSize-1;iter++){
			s_selected.selectedIndex = s_selected.length-2;
			mediaType = f_arraymove( selected_conversions  , s_selected, conversions,  s_pool);
		
		}
		change_media(s_mediatype);
	}
	
	function parse_querystring() {
		//var selectedValues = "foo_bar";
		var selectedValues = GET_HTTP_QueryString("selectedValues");
	
		if (selectedValues != "") {
			var arrSelectedValues = selectedValues.split("_");
	
		
			for (h=0;h<arrSelectedValues.length; h++) {
				f_arraymove_arrOnly (conversions, selected_conversions, arrSelectedValues[h]);
			}
		}
	}

	function f_drop(){
		s_pool =  window.document.partnerConversionTypesForm.conversionTypesPool;
		s_selected = window.document.partnerConversionTypesForm.partnerConversionTypes;
		s_mediatype = window.document.partnerConversionTypesForm.mediatype;
		mediaType = f_arraymove(selected_conversions  , s_selected, conversions,  s_pool );
		change_media(s_mediatype);
	}


	var STRING_FILLER = "                                                    ";
	
	
	function strLeft(str, n){
		if (n <= 0)
		    return "";
		else if (n > String(str).length)
		    return str;
		else
		    return String(str).substring(0,n);
	}
	
	
	function extract_county(lvarStrToEx) {
	
		var arrSelectedValues = lvarStrToEx.split(" ");
		var namePortion = "";
		for (var h=0;h<arrSelectedValues.length; h++) {

			if (strLeft(arrSelectedValues[h], 1) != "(") {
			  namePortion = namePortion + arrSelectedValues[h];
			}

		}
		return namePortion;
	
	}
	
	function change_media(oDropdown) {


		mytype = oDropdown.options[oDropdown.selectedIndex].value;
		//alert(mytype);
		
		
		namePortion = extract_county(oDropdown.options[oDropdown.selectedIndex].text);


		
		//alert(namePortion);
		
		hideAll();
		document.getElementById(namePortion.toLowerCase()).style.visibility="visible";
		
		
		document.getElementById('mapimg').src = 'towngifs/' + namePortion + '.gif';
				
		//alert(document.getElementById('mapimg').src);
		s_destination_pool = window.document.partnerConversionTypesForm.conversionTypesPool;
		conversionspool = f_findConversionsByType(mytype,  conversions);

		s_destination_select = window.document.partnerConversionTypesForm.partnerConversionTypes;

	    	conversionsselect = f_findConversionsByType(mytype,  selected_conversions);


		f_populate_type(s_destination_pool, conversionspool, mytype);

		//f_populate_type(s_destination_select, conversionsselect, mytype);
		f_populate_full(s_destination_select, selected_conversions);

	}

	function f_populate_type(s_listbox, src_array, type) {
		f_clearselectbox(s_listbox);

		if  (src_array!=null){
			for(i=0; i<src_array.length; i=i+1) {

					if(src_array[i].type == type) {
						text1 = src_array[i].name;
						value1 = src_array[i].value;
						s_listbox.options[s_listbox.length - 1] = new Option(text1, value1);
						s_listbox.options[s_listbox.length] = new Option(STRING_FILLER, "filler");
					}
			}
			f_sortSelect(s_listbox);
		}
	}

	function f_populate_full(s_listbox, src_array) {

		f_clearselectbox(s_listbox);
		for (i=0; i< src_array.length; i++) {
			for(j=0; j< src_array[i].length; j++) {
				s_listbox.options[s_listbox.length - 1] = new Option(src_array[i][j].name, src_array[i][j].value);
				s_listbox.options[s_listbox.length] = new Option(STRING_FILLER, "filler");
			}
		}
	}

	function f_save_full(hiddenfield, src_array) {
		var sAllValues = "" ;
		//f_clearselectbox(s_listbox);
		for (i=0; i< src_array.length; i++) {
			for(j=0; j< src_array[i].length; j++) {
				sAllValues = sAllValues +  src_array[i][j].value;
				if (j == src_array[i].length - 1 && i == src_array.length -1) {
					
				} else {
					sAllValues = sAllValues + "_";
				}
			}
		}
		hiddenfield.value= sAllValues;
	}

	function f_findConversionsByType(type, typearray) {
		if(typearray != null) {
			for (i=0; i<typearray.length; i++) {
				if(typearray[i].length != 0) {
					if(typearray[i][0].type == type)
						return typearray[i];
				}
			}
		}
		return null;
	}


	function f_findMediaTypeIndex(type, typearray) {
		for (i=0; i<typearray.length; i++) {
			if(typearray[i].length != 0) {
				if(typearray[i][0].type == type) {
					return i;
				}
			}
		}
		return -1;
	}


	function f_findMediaTypeIndexByConvId(p_convid, typearray) {
		for (i=0; i<typearray.length; i++) {
			for(j=0; j<typearray[i].length; j++) {
				if(typearray[i][j].value == p_convid)
					return i;
			}
		}
		return -1;
	}


	function f_findConversionIndex(convId, convArray) {
			for (i=0; i< convArray.length; i++) {
					if(convArray[i].value == convId){
						return i;
					}
			}
	}

	function f_clearselectbox(oSelectbox) {
		//alert("Selectbox Length: " + oSelectbox.length);
		while(oSelectbox.length!=1) {
				oSelectbox.options[0] = null;
		}
	}

	function f_arraymove(src_array, src_listbox, dest_array, dest_listbox) {
			
		f_arraymove_arrOnly(src_array, dest_array, src_listbox.options[src_listbox.selectedIndex].value);
		f_move(src_listbox, dest_listbox);
		return srcMediaType;

	}
	
	function f_arraymove_arrOnly (src_array, dest_array, valueToMove) {
		selConvId = valueToMove;		
		//alert("selConvId: " + selConvId);
		srcMediaTypeIndex = f_findMediaTypeIndexByConvId(selConvId, src_array);
		//alert("srcMediaTypeIndex: " + srcMediaTypeIndex);
		srcMediaType = src_array[srcMediaTypeIndex][0].type;
		//alert("srcMediaType: " + srcMediaType);
		destMediaTypeIndex = f_findMediaTypeIndex(srcMediaType, dest_array);
		if (destMediaTypeIndex == -1) {
			dest_array.push(new Array(0));
			destMediaTypeIndex = dest_array.length-1;
		}
		//alert("destMediaTypeIndex: " + destMediaTypeIndex);
		srcConversionIndex = f_findConversionIndex(selConvId, src_array[srcMediaTypeIndex]);
		//alert("srcConversionIndex: " + srcConversionIndex);
		dest_array[destMediaTypeIndex].push(src_array[srcMediaTypeIndex][srcConversionIndex]);
		src_array[srcMediaTypeIndex] = f_del_arr_element(src_array[srcMediaTypeIndex], srcConversionIndex);
		return srcMediaType;
	
	}



	function f_del_arr_element(p_array, p_index) {
			begin = p_array.slice(0, p_index+1);
			remain = p_array.slice(p_index+1, p_array.length);
			begin.pop();
			//p_array = begin.concat(remain);
			return begin.concat(remain);
	}

	function f_saveselectbox(oSelectbox, sForm) {

		var sAllValues = "" ;
		//alert(sForm + "." + oSelectbox.name + "Values.value ='';");
		eval("document." + sForm + "." + oSelectbox.name + "Values.value ='';");

		for(i=0; i<oSelectbox.length; i=i+1) {
			if(oSelectbox.options[i].value != "filler") {
				//eval(sForm + "." + oSelectbox.options[i].value + ".value= " + i + ";");
				sAllValues = sAllValues +   oSelectbox.options[i].value + "_";
			}
		}
		eval("document." + sForm + "." + oSelectbox.name + "Values.value = '" +sAllValues +"';");

	}


	function f_move (s_source, s_destination) {
		//alert("Entering f_move");
		var STRING_FILLER = "                                                    ";
		var oForm, newText, newValue, value1, value2, text1, text2;

		//oForm = window.document.personalization_registration;
		if ( s_source.value != "") {

			text1 = s_source.options[s_source.selectedIndex].text;
			value1 = s_source.options[s_source.selectedIndex].value;

			if (value1 != "-1" && !itemExists( value1, s_destination) && value1 != "filler") {
				s_destination.options[s_destination.length - 1] = new Option(text1, value1);
				s_destination.options[s_destination.length] = new Option(STRING_FILLER, "filler");
				f_delAnyList(s_source);
			}



		} else {
			alert("Please select a feature");
		}

		//alert("Exiting f_move");
	}

	function f_delAnyList(oWherefromMaster) {
		//var oForm = ;
		if (oWherefromMaster.options[oWherefromMaster.selectedIndex].value != 'filler') {
			if (oWherefromMaster.selectedIndex != -1) {
				oWherefromMaster.options[oWherefromMaster.selectedIndex] = null;
			}
		}

	}

	function itemExists(address, list) {
		for (i = 0; i < list.length; ++i) {
			if (address == list.options[i].value) {
				return true;
			}
		}

		return false;
	}

	// -------------------------------------------------------------------
	// sortSelect(select_object)
	//   Pass this function a SELECT object and the options will be sorted
	//   by their text (display) values
	// -------------------------------------------------------------------
	function f_sortSelect(obj) {
		//alert("Sorting" + obj.name);
		var o = new Array();
		if (obj.options==null) { return; }
		for (var i=0; i<obj.options.length-1; i++) {
			o[o.length] = new Option( obj.options[i].text, obj.options[i].value, obj.options[i].defaultSelected, obj.options[i].selected) ;
			}
		if (o.length==0) { return; }
		o = o.sort(
			function(a,b) {
				if ((a.text+"") < (b.text+"")) { return -1; }
				if ((a.text+"") > (b.text+"")) { return 1; }
				return 0;
				}
			);

		for (var i=0; i<o.length; i++) {
			obj.options[i] = new Option(o[i].text, o[i].value, o[i].defaultSelected, o[i].selected);
			}
	}
	
	function GET_HTTP_QueryString(Query_String_Name) {
	 var i, pos, argname, argvalue, queryString, pairs;
	 // get the string following the question mark
	 queryString = location.href.substring(location.href.indexOf("?")+1);
	 // split parameters into pairs, assuming pairs are separated by ampersands
	 pairs = queryString.split("&");
	 // for each pair, we get the name and the value
	        for (i = 0; i < pairs.length; i++) { 
		  pos = pairs[i].indexOf('='); 
		  if (pos == -1) {
		  continue; 
		  }
		  argname = pairs[i].substring(0,pos);
		  argvalue = pairs[i].substring(pos+1); 
		// Replaces "Google-style" + signs with the spaces they represent
		    if (argname == Query_String_Name) {
		       return unescape(argvalue.replace(/\+/g, " "));
		    }
		}
		return false;
	}
	
	
	function toggleVisibility(me){
			hideAll();
			
			var localForm = document.getElementById("partnerConversionTypesForm");
	
			var lvarListBox = localForm.mediatype;
	
			var lvarSelIndex = findInListbox (lvarListBox,me.id.toUpperCase());
	
			//alert(lvarSelIndex);
			
			if (lvarSelIndex == null) {
				alert("No homes available in the database for the selected county");
			
			} else {
			
				lvarListBox.options[lvarSelIndex].selected =true;

				if (me.style.visibility=="hidden") {
					me.style.visibility="visible";
				} else {
					me.style.visibility="hidden";
				}
				
				change_media(localForm.mediatype);
			}
	}
	
	function findInListbox(listbox, value) {
	
		var count1;
	
		//alert(value);
	
		for (count1=0; count1 < listbox.length; count1++) {
	
			//alert(extract_county(listbox.options[count1].text.toUpperCase()));
			if (extract_county(listbox.options[count1].text.toUpperCase()) == value) {
				return count1;
			}
		}
	}
	
	function hideAll() {
		document.getElementById("bergen").style.visibility="hidden";
		document.getElementById("warren").style.visibility="hidden";
		document.getElementById("hudson").style.visibility="hidden";
		document.getElementById("cumberland").style.visibility="hidden";
		document.getElementById("ocean").style.visibility="hidden";
		document.getElementById("morris").style.visibility="hidden";
		document.getElementById("capemay").style.visibility="hidden";
		document.getElementById("salem").style.visibility="hidden";
		document.getElementById("gloucester").style.visibility="hidden";
		document.getElementById("camden").style.visibility="hidden";
		document.getElementById("burlington").style.visibility="hidden";
		document.getElementById("monmouth").style.visibility="hidden";
		document.getElementById("mercer").style.visibility="hidden";
		document.getElementById("middlesex").style.visibility="hidden";
		document.getElementById("somerset").style.visibility="hidden";
		document.getElementById("hunterdon").style.visibility="hidden";
		document.getElementById("union").style.visibility="hidden";
		document.getElementById("essex").style.visibility="hidden";
		document.getElementById("passaic").style.visibility="hidden";
		document.getElementById("sussex").style.visibility="hidden";
		document.getElementById("atlantic").style.visibility="hidden";
}
