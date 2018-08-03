<?php include('header.php'); ?>
<div>
	<ul class="breadcrumb">
	<li>
            <a href="<?php echo base_url()?>/admin/index/inedex">Home</a> <span class="divider">/</span>
	</li>
	<li>
	   <a href="<?php echo base_url()?>/admin/candidate/index">Candidate</a> <span class="divider">/</span>
	</li>
        <li>
	   <a href="<?php echo base_url()?>/admin/candidate/editCandidate">Edit Candidate</a> 
	</li>
        </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
	<div class="box-header well" data-original-title>
            <h2><i class="icon-info"></i>Edit Candidate</h2>
        </div>
               
        <div class="box-content">
            <form class="form-horizontal" name="registration" action="<?php echo base_url('admin/candidate/updateData')?>"  method="post"   enctype="multipart/form-data">
    <?php foreach($candsingleList as $r){?> 
                <input type="hidden" name="id" value="<?php echo $r->id?>" > 
            <div class="control-group">
                <label for="exampleInputEmail1" class="span2 control-label">First Name</label>
                 <div class="controls">
                     <input type="text" class="input-xlarge form-control" id="firstname" name="firstname" size="50" onblur="allLetter()" placeholder="First Name" value="<?php echo $r->fName?>">
                 </div>
                     <div id="errfn" class="error"></div>
            </div>
           <div class="control-group">
                <label for="exampleInputEmail1" class="span2 control-label">Middle Name</label>
                 <div class="controls">
                    <input type="text" class="input-xlarge form-control " id="middlename" name="middlename" size="50"  placeholder="Middle Name" value="<?php echo $r->mName?>">
                </div>
           </div>
            <div class="control-group">
                 <label for="exampleInputPassword1" class="span2 control-label">Last Name</label>
                 <div class="controls">
                      <input type="text" class="input-xlarge form-control" id="lastname" name="lastname" size="50" onblur="allLetterl()" placeholder="Last Name" value="<?php echo $r->lName?>">
                 </div>
                      <div id="errfnl" class="error"></div>
             </div>
          
              <div class="control-group">
                <label for="exampleInputPassword1" class="span2 control-label">Email</label>
                 <div class="controls">
                    <input type="email" class="form-control" id="emailid" name="emailid" size="50" onblur="ValidateEmail()" placeholder="Email" value="<?php echo $r->email?>">
                 </div>    
                <div id="errfne" class="error"></div>
			<?php echo form_error('emailid', '<div class="error">', '</div>'); ?>
             </div>
            <div class="control-group">
                <label for="exampleInputPassword1" class="span2 control-label">Mobile Number</label>
                <div class="controls">
                  <input type="tel" class="form-control" id="phoneno" name="phoneno"  placeholder="e.g. 8895679043" value="<?php echo $r->mobile?>">
                </div>
		<?php echo form_error('phoneno', '<div class="error">', '</div>'); ?>
             </div>
            <div class="control-group">
                <label for="exampleInputPassword1" class="span2 control-label">Present Location</label>
                  <div class="controls">
                   <input type="text" class="form-control" id="presentlocation"  name="presentlocation" size="50" onblur="alphanumeric()" placeholder="Present Location" value="<?php echo $r->location?>">
                  </div>			
                   <div id="errfnpl" class="error"></div>
             </div>
              <div class="control-group">
		  <label class="span2 control-label">CV Upload<span class="error">*</span></label>
		   <div class="controls">
                    <div class="uploader" id="uniform-undefined">
                             <input type="file" name="fileToUpload" size="19" style="opacity: 0;" onchange="return file_upload();" value="<?php echo $r->cvname?>">
                              <span class="filename">No file selected</span><span class="action">Choose File</span></div>
		</div>
              </div>
                <div class="control-group">
              <label for="exampleInputPassword1" class="span2 control-label">Nationality</label>
                <div class="controls">
              <select name="nationality"  value="nationality">
							  <option value="<?php echo $r->nationality?>"><?php echo $r->nationality?></option>
							  <option value="afghan">Afghan</option>
							  <option value="albanian">Albanian</option>
							  <option value="algerian">Algerian</option>
							  <option value="american">American</option>
							  <option value="andorran">Andorran</option>
							  <option value="angolan">Angolan</option>
							  <option value="antiguans">Antiguans</option>
							  <option value="argentinean">Argentinean</option>
							  <option value="armenian">Armenian</option>
							  <option value="australian">Australian</option>
							  <option value="austrian">Austrian</option>
							  <option value="azerbaijani">Azerbaijani</option>
							  <option value="bahamian">Bahamian</option>
							  <option value="bahraini">Bahraini</option>
							  <option value="bangladeshi">Bangladeshi</option>
							  <option value="barbadian">Barbadian</option>
							  <option value="barbudans">Barbudans</option>
							  <option value="batswana">Batswana</option>
							  <option value="belarusian">Belarusian</option>
							  <option value="belgian">Belgian</option>
							  <option value="belizean">Belizean</option>
							  <option value="beninese">Beninese</option>
							  <option value="bhutanese">Bhutanese</option>
							  <option value="bolivian">Bolivian</option>
							  <option value="bosnian">Bosnian</option>
							  <option value="brazilian">Brazilian</option>
							  <option value="british">British</option>
							  <option value="bruneian">Bruneian</option>
							  <option value="bulgarian">Bulgarian</option>
							  <option value="burkinabe">Burkinabe</option>
							  <option value="burmese">Burmese</option>
							  <option value="burundian">Burundian</option>
							  <option value="cambodian">Cambodian</option>
							  <option value="cameroonian">Cameroonian</option>
							  <option value="canadian">Canadian</option>
							  <option value="cape verdean">Cape Verdean</option>
							  <option value="central african">Central African</option>
							  <option value="chadian">Chadian</option>
							  <option value="chilean">Chilean</option>
							  <option value="chinese">Chinese</option>
							  <option value="colombian">Colombian</option>
							  <option value="comoran">Comoran</option>
							  <option value="congolese">Congolese</option>
							  <option value="costa rican">Costa Rican</option>
							  <option value="croatian">Croatian</option>
							  <option value="cuban">Cuban</option>
							  <option value="cypriot">Cypriot</option>
							  <option value="czech">Czech</option>
							  <option value="danish">Danish</option>
							  <option value="djibouti">Djibouti</option>
							  <option value="dominican">Dominican</option>
							  <option value="dutch">Dutch</option>
							  <option value="east timorese">East Timorese</option>
							  <option value="ecuadorean">Ecuadorean</option>
							  <option value="egyptian">Egyptian</option>
							  <option value="emirian">Emirian</option>
							  <option value="equatorial guinean">Equatorial Guinean</option>
							  <option value="eritrean">Eritrean</option>
							  <option value="estonian">Estonian</option>
							  <option value="ethiopian">Ethiopian</option>
							  <option value="fijian">Fijian</option>
							  <option value="filipino">Filipino</option>
							  <option value="finnish">Finnish</option>
							  <option value="french">French</option>
							  <option value="gabonese">Gabonese</option>
							  <option value="gambian">Gambian</option>
							  <option value="georgian">Georgian</option>
							  <option value="german">German</option>
							  <option value="ghanaian">Ghanaian</option>
							  <option value="greek">Greek</option>
							  <option value="grenadian">Grenadian</option>
							  <option value="guatemalan">Guatemalan</option>
							  <option value="guinea-bissauan">Guinea-Bissauan</option>
							  <option value="guinean">Guinean</option>
							  <option value="guyanese">Guyanese</option>
							  <option value="haitian">Haitian</option>
							  <option value="herzegovinian">Herzegovinian</option>
							  <option value="honduran">Honduran</option>
							  <option value="hungarian">Hungarian</option>
							  <option value="icelander">Icelander</option>
							  <option value="indian">Indian</option>
							  <option value="indonesian">Indonesian</option>
							  <option value="iranian">Iranian</option>
							  <option value="iraqi">Iraqi</option>
							  <option value="irish">Irish</option>
							  <option value="israeli">Israeli</option>
							  <option value="italian">Italian</option>
							  <option value="ivorian">Ivorian</option>
							  <option value="jamaican">Jamaican</option>
							  <option value="japanese">Japanese</option>
							  <option value="jordanian">Jordanian</option>
							  <option value="kazakhstani">Kazakhstani</option>
							  <option value="kenyan">Kenyan</option>
							  <option value="kittian and nevisian">Kittian and Nevisian</option>
							  <option value="kuwaiti">Kuwaiti</option>
							  <option value="kyrgyz">Kyrgyz</option>
							  <option value="laotian">Laotian</option>
							  <option value="latvian">Latvian</option>
							  <option value="lebanese">Lebanese</option>
							  <option value="liberian">Liberian</option>
							  <option value="libyan">Libyan</option>
							  <option value="liechtensteiner">Liechtensteiner</option>
							  <option value="lithuanian">Lithuanian</option>
							  <option value="luxembourger">Luxembourger</option>
							  <option value="macedonian">Macedonian</option>
							  <option value="malagasy">Malagasy</option>
							  <option value="malawian">Malawian</option>
							  <option value="malaysian">Malaysian</option>
							  <option value="maldivan">Maldivan</option>
							  <option value="malian">Malian</option>
							  <option value="maltese">Maltese</option>
							  <option value="marshallese">Marshallese</option>
							  <option value="mauritanian">Mauritanian</option>
							  <option value="mauritian">Mauritian</option>
							  <option value="mexican">Mexican</option>
							  <option value="micronesian">Micronesian</option>
							  <option value="moldovan">Moldovan</option>
							  <option value="monacan">Monacan</option>
							  <option value="mongolian">Mongolian</option>
							  <option value="moroccan">Moroccan</option>
							  <option value="mosotho">Mosotho</option>
							  <option value="motswana">Motswana</option>
							  <option value="mozambican">Mozambican</option>
							  <option value="namibian">Namibian</option>
							  <option value="nauruan">Nauruan</option>
							  <option value="nepalese">Nepalese</option>
							  <option value="new zealander">New Zealander</option>
							  <option value="ni-vanuatu">Ni-Vanuatu</option>
							  <option value="nicaraguan">Nicaraguan</option>
							  <option value="nigerien">Nigerien</option>
							  <option value="north korean">North Korean</option>
							  <option value="northern irish">Northern Irish</option>
							  <option value="norwegian">Norwegian</option>
							  <option value="omani">Omani</option>
							  <option value="pakistani">Pakistani</option>
							  <option value="palauan">Palauan</option>
							  <option value="panamanian">Panamanian</option>
							  <option value="papua new guinean">Papua New Guinean</option>
							  <option value="paraguayan">Paraguayan</option>
							  <option value="peruvian">Peruvian</option>
							  <option value="polish">Polish</option>
							  <option value="portuguese">Portuguese</option>
							  <option value="qatari">Qatari</option>
							  <option value="romanian">Romanian</option>
							  <option value="russian">Russian</option>
							  <option value="rwandan">Rwandan</option>
							  <option value="saint lucian">Saint Lucian</option>
							  <option value="salvadoran">Salvadoran</option>
							  <option value="samoan">Samoan</option>
							  <option value="san marinese">San Marinese</option>
							  <option value="sao tomean">Sao Tomean</option>
							  <option value="saudi">Saudi</option>
							  <option value="scottish">Scottish</option>
							  <option value="senegalese">Senegalese</option>
							  <option value="serbian">Serbian</option>
							  <option value="seychellois">Seychellois</option>
							  <option value="sierra leonean">Sierra Leonean</option>
							  <option value="singaporean">Singaporean</option>
							  <option value="slovakian">Slovakian</option>
							  <option value="slovenian">Slovenian</option>
							  <option value="solomon islander">Solomon Islander</option>
							  <option value="somali">Somali</option>
							  <option value="south african">South African</option>
							  <option value="south korean">South Korean</option>
							  <option value="spanish">Spanish</option>
							  <option value="sri lankan">Sri Lankan</option>
							  <option value="sudanese">Sudanese</option>
							  <option value="surinamer">Surinamer</option>
							  <option value="swazi">Swazi</option>
							  <option value="swedish">Swedish</option>
							  <option value="swiss">Swiss</option>
							  <option value="syrian">Syrian</option>
							  <option value="taiwanese">Taiwanese</option>
							  <option value="tajik">Tajik</option>
							  <option value="tanzanian">Tanzanian</option>
							  <option value="thai">Thai</option>
							  <option value="togolese">Togolese</option>
							  <option value="tongan">Tongan</option>
							  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
							  <option value="tunisian">Tunisian</option>
							  <option value="turkish">Turkish</option>
							  <option value="tuvaluan">Tuvaluan</option>
							  <option value="ugandan">Ugandan</option>
							  <option value="ukrainian">Ukrainian</option>
							  <option value="uruguayan">Uruguayan</option>
							  <option value="uzbekistani">Uzbekistani</option>
							  <option value="venezuelan">Venezuelan</option>
							  <option value="vietnamese">Vietnamese</option>
							  <option value="welsh">Welsh</option>
							  <option value="yemenite">Yemenite</option>
							  <option value="zambian">Zambian</option>
							  <option value="zimbabwean">Zimbabwean</option>
                </select>
                </div>
		<div id="errfnn" class="error"></div>
            </div>
            <div class="control-group offset2" >
                   <button type="submit" class="btn btn-warning btn-large">Update</button>
							  
		</div>
    <?php } ?>
        </form>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
<script type="text/javascript">

function file_upload()
{
				var imgpath = document.getElementById('fileToUpload').value; 	                      
				console.log(imgpath);

				if(imgpath == "")
				{
				alert("upload your word file");
				//document.file.fileToUpload.focus();
				return false;
				}
				else
				{
				var arr1 = new Array;
				arr1 = imgpath.split("\\");
				var len = arr1.length;
				var img1 = arr1[len-1];
				var filext = img1.substring(img1.lastIndexOf(".")+1);
				// Checking Extension
				if(filext == "doc" || filext == "docx" || filext == "pdf")
				{
				//alert("File has been upload correctly")
				return true;
				}
				else
				{
                                    
                                  document.getElementById("fileToUpload").value = '';
				alert("You are requested to upload .doc .docx & .rtf documents only.");
				//document.form.fileToUpload.focus();
				return false;
				}
				}
}
</script>