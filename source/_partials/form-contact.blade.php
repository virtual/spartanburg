<form action="#" method="post">
    <fieldset id="contactForm">
    <label for="name">Name:</label>
    <input type="text" id="name" placeholder="Enter your 
  full name" />

    <label for="email">Email:</label>
    <input type="email" id="email" placeholder="Enter 
  your email address" />

    <label for="message">Message:</label>
    <textarea id="message" placeholder="What's on your 
  mind?"></textarea>

    <input type="submit" value="Send message" />

  </fieldset>
</form>

<fieldset id="contactForm">
    <h2>Take&nbsp;a tour of any SCC campus!</h2>
    <p>Thank you for your interest in Spartanburg Community College and for wanting to take a tour of our campus! Fill out the request form below and we will work with you to arrange a tour (no walk-ins, please)</p>
    <p>Tours are held on designated days (listed in form below) at 9:00 a.m. (excluding holidays, special events and official College closings). Individuals interested in scheduling a tour must complete the request form to be added to the list of attendees. <strong>Please note that this does not guarantee a private tour. More than one individual may sign up for the same day.</strong><strong>&nbsp;</strong>&nbsp;&nbsp;</p>
    <div><label for="FirstName">*First Name:</label><input onblur="design_validate_re(/\S+/,this,'Cannot be blank');" id="FirstName" title="First Name 
    Cannot be blank" class="design_textfield" size="24" name="FirstName" ektdesignns_name="FirstName" ektdesignns_caption="First Name" ektdesignns_nodetype="element" ektdesignns_validation="string-req" ektdesignns_datatype="string" ektdesignns_basetype="text" ektdesignns_schema="<xs:minLength value=&quot;1&quot;></xs:minLength>" ektdesignns_validate="re:/\S+/" ektdesignns_invalidmsg="Cannot be blank" type="text"><div><label for="LastName">*Last Name:</label><input onblur="design_validate_re(/\S+/,this,'Cannot be blank');" id="LastName" title="Last Name" class="design_textfield" size="24" name="LastName" ektdesignns_name="LastName" ektdesignns_caption="Last Name" ektdesignns_nodetype="element" ektdesignns_validation="string-req" ektdesignns_datatype="string" ektdesignns_basetype="text" ektdesignns_schema="<xs:minLength value=&quot;1&quot;></xs:minLength>" ektdesignns_validate="re:/\S+/" ektdesignns_invalidmsg="Cannot be blank" type="text"></div>
    <div><div><label for="Address1" style="width: 600px;">*Address:</label><input ektdesignns_name="Address1" ektdesignns_caption="Address1" ektdesignns_nodetype="element" ektdesignns_validation="string-req" ektdesignns_datatype="string" ektdesignns_basetype="text" ektdesignns_schema="<xs:minLength value=&quot;1&quot;></xs:minLength>" ektdesignns_validate="re:/\S+/" ektdesignns_invalidmsg="Cannot be blank" size="50" id="Address1" class="design_textfield" title="Address1" name="Address1" type="text"><div><label for="Address2" style="width: 600px;">Address line 2 (optional):</label><input ektdesignns_name="Address2" ektdesignns_caption="Address2" ektdesignns_nodetype="element" size="50" id="Address2" class="design_textfield" title="Address2" name="Address2" type="text"></div>
    <div><label for="City" style="width: 600px;">*City:</label><input ektdesignns_name="City" ektdesignns_caption="City" ektdesignns_nodetype="element" ektdesignns_validation="string-req" ektdesignns_datatype="string" ektdesignns_basetype="text" ektdesignns_schema="<xs:minLength value=&quot;1&quot;></xs:minLength>" ektdesignns_validate="re:/\S+/" ektdesignns_invalidmsg="Cannot be blank" size="50" id="City" class="design_textfield" title="City" name="City" type="text"></div>
    <div><label for="State" style="width: 600px;">*State:</label><select ektdesignns_maxoccurs="1" ektdesignns_datalist="USPS-US" ektdesignns_datasrc="/WorkArea/ContentDesigner/uspsus.xsd" ektdesignns_dataselect="/xsd:schema/xsd:simpleType/xsd:restriction/xsd:enumeration" ektdesignns_captionxpath="xsd:annotation/xsd:documentation" ektdesignns_valuexpath="@value" ektdesignns_datanamespaces="xmlns:xsd='http://www.w3.org/2001/XMLSchema'" ektdesignns_name="State" ektdesignns_caption="State" ektdesignns_nodetype="element" ektdesignns_validation="select-req" size="1" id="State" title="State" name="State"><option selected="selected">(Select)</option>
      <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <option value="AS">American Samoa</option>
      <option value="AZ">Arizona</option>
      <option value="AR">Arkansas</option>
      <option value="AA">Armed Forces Americas (except Canada)</option>
      <option value="AE">Armed Forces Europe, Canada, Africa, Middle East</option>
      <option value="AP">Armed Forces Pacific</option>
      <option value="CA">California</option>
      <option value="CO">Colorado</option>
      <option value="CT">Connecticut</option>
      <option value="DE">Delaware</option>
      <option value="DC">District Of Columbia</option>
      <option value="FM">Federated States Of Micronesia</option>
      <option value="FL">Florida</option>
      <option value="GA">Georgia</option>
      <option value="GU">Guam</option>
      <option value="HI">Hawaii</option>
      <option value="ID">Idaho</option>
      <option value="IL">Illinois</option>
      <option value="IN">Indiana</option>
      <option value="IA">Iowa</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="ME">Maine</option>
      <option value="MH">Marshall Islands</option>
      <option value="MD">Maryland</option>
      <option value="MA">Massachusetts</option>
      <option value="MI">Michigan</option>
      <option value="MN">Minnesota</option>
      <option value="MS">Mississippi</option>
      <option value="MO">Missouri</option>
      <option value="MT">Montana</option>
      <option value="NE">Nebraska</option>
      <option value="NV">Nevada</option>
      <option value="NH">New Hampshire</option>
      <option value="NJ">New Jersey</option>
      <option value="NM">New Mexico</option>
      <option value="NY">New York</option>
      <option value="NC">North Carolina</option>
      <option value="ND">North Dakota</option>
      <option value="MP">Northern Mariana Islands</option>
      <option value="OH">Ohio</option>
      <option value="OK">Oklahoma</option>
      <option value="OR">Oregon</option>
      <option value="PW">Palau</option>
      <option value="PA">Pennsylvania</option>
      <option value="PR">Puerto Rico</option>
      <option value="RI">Rhode Island</option>
      <option value="SC">South Carolina</option>
      <option value="SD">South Dakota</option>
      <option value="TN">Tennessee</option>
      <option value="TX">Texas</option>
      <option value="UT">Utah</option>
      <option value="VT">Vermont</option>
      <option value="VI">Virgin Islands</option>
      <option value="VA">Virginia</option>
      <option value="WA">Washington</option>
      <option value="WV">West Virginia</option>
      <option value="WI">Wisconsin</option>
      <option value="WY">Wyoming</option>
    </select></div>
    <div><label for="ZIP" style="width: 600px;">*ZIP/Postal Code:</label><input ektdesignns_name="ZIP" ektdesignns_caption="ZIP" ektdesignns_nodetype="element" ektdesignns_validation="string-req" ektdesignns_datatype="string" ektdesignns_basetype="text" ektdesignns_schema="<xs:minLength value=&quot;1&quot;></xs:minLength>" ektdesignns_validate="re:/\S+/" ektdesignns_invalidmsg="Cannot be blank" size="10" id="ZIP" class="design_textfield" title="ZIP" name="ZIP" type="text"></div>
    </div>
    <label for="Phone">*Primary Phone:</label><input id="Phone" title="Phone" class="design_textfield" size="12" name="Phone" ektdesignns_name="Phone" ektdesignns_caption="Phone" ektdesignns_nodetype="element" type="text"> (include area code)</div>
    <div>&nbsp;<label for="AlternatePhone">Alternate Phone:</label><input id="AlternatePhone" title="Alternate Phone" class="design_textfield" size="12" name="AlternatePhone" ektdesignns_name="AlternatePhone" ektdesignns_caption="Alternate Phone" ektdesignns_nodetype="element" type="text"> (include area code)</div>
    <div><label for="Email">*Email:</label><input id="Email" title="Email" class="design_textfield" name="Email" ektdesignns_name="Email" ektdesignns_caption="Email" ektdesignns_nodetype="element" type="text" ektdesignns_validation="email-req" ektdesignns_translate="false" ektdesignns_datatype="string" ektdesignns_basetype="text" ektdesignns_schema="<xs:pattern value=&quot;[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+(\.[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+)*@[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+(\.[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+)*&quot; />" ektdesignns_validate="re:/^([A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+(\.[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+)*@[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+(\.[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+)*)$/" ektdesignns_invalidmsg="Email address (required)" onblur="design_validate_re(/^([A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+(\.[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+)*@[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+(\.[A-Za-z0-9!#-'\*\+\-\/=\?\^_`\{-~]+)*)$/,this,'Email address (required)');" size="24"></div>
    <div><label for="HighSchool">*High School:</label> <input onblur="design_validate_re(/\S+/,this,'Cannot be blank');" id="HighSchool" title="High School" class="design_textfield" size="60" name="HighSchool" ektdesignns_name="HighSchool" ektdesignns_caption="High School" ektdesignns_nodetype="element" ektdesignns_validation="string-req" ektdesignns_datatype="string" ektdesignns_basetype="text" ektdesignns_schema="<xs:minLength value=&quot;1&quot;></xs:minLength>" ektdesignns_validate="re:/\S+/" ektdesignns_invalidmsg="Cannot be blank" type="text"></div>
    <div><label for="Guidance">Please provide name of guidance counselor to whom your excuse for absence should be sent (if applicable):</label><textarea id="Guidance" title="Guidance" class="design_textfield" cols="55" name="Guidance" ektdesignns_name="Guidance" ektdesignns_caption="Guidance" ektdesignns_nodetype="element"></textarea>
    </div>
    <div><label for="GraduationYear">&nbsp; Year of graduation: </label><input id="GraduationYear" title="Graduation Year" class="design_textfield" size="4" name="GraduationYear" ektdesignns_name="GraduationYear" ektdesignns_caption="Graduation Year" ektdesignns_nodetype="element" type="text"></div>
    <div><div><label for="Parent">*A parent/guardian will be with me:</label></div>
    <select id="Parent" title="Parent" size="1" name="Parent" ektdesignns_name="Parent" ektdesignns_caption="Parent" ektdesignns_nodetype="element" ektdesignns_maxoccurs="1">
    <option selected="selected" value="Yes">Yes</option>
    <option value="No">No</option>
    </select></div>
    <div><div><label for="Veteran">I am a US Military Veteran:</label></div>
    <select id="Veteran" title="Veteran" size="1" name="Veteran" ektdesignns_name="Veteran" ektdesignns_caption="Veteran" ektdesignns_nodetype="element" ektdesignns_maxoccurs="1">
    <option selected="selected" value="Yes">Yes</option>
    <option value="No">No</option>
    </select></div>
    <div><label for="Program">*I am interested in the following career field/program:</label> <select name="Program" ektdesignns_maxoccurs="1" size="1" ektdesignns_nodetype="element" id="Program" ektdesignns_caption="Program" ektdesignns_name="Program" title="Program">
    <option selected="selected" value="Transfer to University">Transfer to University</option>
    <option value="Accounting">Accounting</option>
    <option value="Administrative Office">Administrative Office</option>
    <option value="ASL and Interpreting">ASL and Interpreting</option>
    <option value="Automotive">Automotive</option>
    <option value="Computers">Computers</option>
    <option value="Culinary Arts">Culinary Arts</option>
    <option value="Dental Assisting">Dental Assisting</option>
    <option value="Digital Graphic Design">Digital Graphic Design</option>
    <option value="Early Childhood">Early Childhood</option>
    <option value="Engineering Technologies">Engineering Technologies</option>
    <option value="Health/Medical">Health/Medical</option>
    <option value="Horticulture/Landscaping">Horticulture/Landscaping</option>
    <option value="HVAC and Refrigeration">HVAC and Refrigeration</option>
    <option value="Management">Management/Business</option>
    <option value="Manufacturing/Industrial">Manufacturing/Industrial</option>
    <option value="Mechatronics/Robotics">Mechatronics/Robotics</option>
    <option value="Nursing and Patient Care">Nursing and Patient Care</option>
    <option value="Paramedic/EMT">Paramedic/EMT</option>
    <option value="Pharmacy Technician">Pharmacy Technician</option>
    <option value="Pre-Health Sciences">Pre-Health Sciences</option>
    <option value="Radiologic Technology">Radiologic Technology</option>
    <option value="Respiratory Care">Respiratory Care</option>
    <option value="Surgical Tech">Surgical Tech</option>
    <option value="Therapeutic Massage">Therapeutic Massage</option>
    <option value="Welding">Welding</option>
    </select></div>
    <div><div><p><span>*Select a tour date:<select name="Date" ektdesignns_maxoccurs="1" size="1" ektdesignns_nodetype="element" id="Date" ektdesignns_caption="Date" ektdesignns_name="Date" title="Date">
    <option selected="selected" value="04/26/2019, 9 AM">04/26/2019, 9 AM</option>
    <option value="05/03/2019, 9 AM">05/03/2019, 9 AM</option>
    <option value="05/10/2019, 9 AM">05/10/2019, 9 AM</option>
    <option value="05/17/2019, 9 AM">05/17/2019, 9 AM</option>
    <option value="05/24/2019, 9 AM">05/24/2019, 9 AM</option>
    <option value="05/31/2019, 9 AM">05/31/2019, 9 AM</option>
    <option value="06/03/2019, 9 AM">06/03/2019, 9 AM</option>
    <option value="06/05/2019, 9 AM">06/05/2019, 9 AM</option>
    <option value="06/07/2019, 9 AM">06/07/2019, 9 AM</option>
    <option value="06/10/2019, 9 AM">06/10/2019, 9 AM</option>
    <option value="06/12/2019, 9 AM">06/12/2019, 9 AM</option>
    <option value="06/14/2019, 9 AM">06/14/2019, 9 AM</option>
    <option value="06/17/2019, 9 AM">06/17/2019, 9 AM</option>
    <option value="06/19/2019, 9 AM">06/19/2019, 9 AM</option>
    <option value="06/21/2019, 9 AM">06/21/2019, 9 AM</option>
    <option value="06/24/2019, 9 AM">06/24/2019, 9 AM</option>
    <option value="06/26/2019, 9 AM">06/26/2019, 9 AM</option>
    <option value="06/28/2019, 9 AM">06/28/2019, 9 AM</option>
    <option value="07/01/2019, 9 AM">07/01/2019, 9 AM</option>
    <option value="07/03/2019, 9 AM">07/03/2019, 9 AM</option>
    <option value="07/08/2019, 9 AM">07/08/2019, 9 AM</option>
    <option value="07/10/2019, 9 AM">07/10/2019, 9 AM</option>
    <option value="07/12/2019, 9 AM">07/12/2019, 9 AM</option>
    <option value="07/15/2019, 9 AM">07/15/2019, 9 AM</option>
    <option value="07/17/2019, 9 AM">07/17/2019, 9 AM</option>
    <option value="07/19/2019, 9 AM">07/19/2019, 9 AM</option>
    <option value="07/22/2019, 9 AM">07/22/2019, 9 AM</option>
    <option value="07/24/2019, 9 AM">07/24/2019, 9 AM</option>
    <option value="07/26/2019, 9 AM">07/26/2019, 9 AM</option>
    <option value="07/29/2019, 9 AM">07/29/2019, 9 AM</option>
    <option value="07/31/2019, 9 AM">07/31/2019, 9 AM</option>
    <option value="08/02/2019, 9 AM">08/02/2019, 9 AM</option>
    <option value="08/05/2019, 9 AM">08/05/2019, 9 AM</option>
    <option value="08/07/2019, 9 AM">08/07/2019, 9 AM</option>
    <option value="08/09/2019, 9 AM">08/09/2019, 9 AM</option>
    <option value="08/12/2019, 9 AM">08/12/2019, 9 AM</option>
    <option value="08/14/2019, 9 AM">08/14/2019, 9 AM</option>
    <option value="08/16/2019, 9 AM">08/16/2019, 9 AM</option>
    </select></span></p>
    </div>
    </div>
    <div><div><label for="Campus">*I am interested in touring the following campus:</label></div>
    <select id="Campus" title="Campus" size="1" name="Campus" ektdesignns_name="Campus" ektdesignns_caption="Campus" ektdesignns_nodetype="element" ektdesignns_maxoccurs="1">
    <option selected="selected" value="SCC Central Campus in Spartanburg">SCC Central Campus in Spartanburg</option>
    <option value="SCC Downtown Campus in downtown Spartanburg">SCC Downtown Campus in downtown Spartanburg</option>
    <option value="SCC Cherokee County Campus in Gaffney">SCC Cherokee County Campus in Gaffney</option>
    <option value="SCC Tyger River Campus in Duncan">SCC Tyger River Campus in Duncan</option>
    <option value="Union County Advanced Technology Center">Union County Advanced Technology Center</option>
    </select><br><br><span style="font-family: &quot;Myriad W01 Bd Cnd&quot;; font-size: 19.2px;">If you would like to schedule a tour for your group or organization, please contact SCC Recruiting Office at (864) 592-4451 or email </span><a href="mailto:mahoneya@sccsc.edu" title="Email mahoneya@sccsc.edu">mahoneya@sccsc.edu</a><span style="font-family: &quot;Myriad W01 Bd Cnd&quot;; font-size: 19.2px;">.</span></div>
    <div><label for="Accommodate">Please list any special accommodations needed for your campus visit:</label><textarea id="Accommodate" title="Accommodate" class="design_textfield" cols="55" name="Accommodate" ektdesignns_name="Accommodate" ektdesignns_caption="Accommodate" ektdesignns_nodetype="element"></textarea>
    </div>
    </div>
    <div>Please click Send button below ONE TIME and wait a few seconds for confirmation. Thank you!</div>
    <input value="Send" class="button" name="btnsubmit" id="btnsubmit" onmousedown="timedText()" type="submit"></fieldset>