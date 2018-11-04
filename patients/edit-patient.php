<?php
	require_once "../includes/initiate.php";
	page_permission("edit_patient");

	
	if(isset($_GET['id'])){$id=$_GET['id'];}
		// action
	else{
		print "<script>";
		print "self.location='../patients/patients-directory$extension';"; 
	    print "</script>";
 	}

	sns_header('Edit Patient');
?>

<div id="edit-patient" class="container page">
<div class="panel panel-default">
<div class="panel-heading theme-patients"><span class="inlineicon edit-mini">Sunting Pesakit</span></div>
<div class="panel-body">
<ol class="breadcrumb link-patients">
  <li><a href="../dashboard">Laman utama</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li><a href="../patients/">Pesakit</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li class="active">Profil Pesakit</li>
</ol>
<?php

if(isset($_POST['submit'])){

	$id=$_GET['id'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$kadp=$_POST['serial'];
	$name=friendly($_POST['name']);
	$contact=friendly($_POST['contact']);
	$email=friendly($_POST['email']);
	$weight=friendly($_POST['weight']);
	$profession=friendly($_POST['profession']);
	$ref_contact=friendly($_POST['ref_contact']);
	$address=friendly($_POST['address']);

	$result=edit_patient($id,$gender,$age,$serial,$name,$contact,$email,$weight,$profession,$ref_contact,$address);

	if($result==false){
	echo"<div class='alert alert-danger' role='alert'>Please enter required information!</div>";	

	}else{
	write_log(staff_info("id"),"updated Patient profile for $name at ".staff_info('branch'),"patient","20");
	echo"<div class='alert alert-success' role='alert'>Profile has been successfully updated!</span></div>";	
	}	

}
?>
<form method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="<?php echo "$id";?>"/>
	<div class="form-group"><label>Jantina:</label><select class="form-control"  name='gender'  id='gender' size='1' >
    <option value='<?php echo patient_info("gender",$id);?>'><?php echo patient_info("gender",$id);?> (semasa)</option>
    <option value='Lelaki'>Lelaki</option>
    <option value='Wanita'>Wanita</option></select></div>
	<div class="form-group"><label>Umur:</label><select class="form-control"  name='age' id='age' size='1'>
			<option value="<?php echo patient_info("age",$id);?>"><?php echo patient_info("age",$id);?> (Semasa)</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>
			<option value="38">38</option>
			<option value="39">39</option>
			<option value="40">40</option>
			<option value="41">41</option>
			<option value="42">42</option>
			<option value="43">43</option>
			<option value="44">44</option>
			<option value="45">45</option>
			<option value="46">46</option>
			<option value="47">47</option>
			<option value="48">48</option>
			<option value="49">49</option>
			<option value="50">50</option>
			<option value="51">51</option>
			<option value="52">52</option>
			<option value="53">53</option>
			<option value="54">54</option>
			<option value="55">55</option>
			<option value="56">56</option>
			<option value="57">57</option>
			<option value="58">58</option>
			<option value="59">59</option>
			<option value="60">60</option>
			<option value="61">61</option>
			<option value="62">62</option>
			<option value="63">63</option>
			<option value="64">64</option>
			<option value="65">65</option>
			<option value="66">66</option>
			<option value="67">67</option>
			<option value="68">68</option>
			<option value="69">69</option>
			<option value="70">70</option>
			<option value="71">71</option>
			<option value="72">72</option>
			<option value="73">73</option>
			<option value="74">74</option>
			<option value="75">75</option>
			<option value="76">76</option>
			<option value="77">77</option>
			<option value="78">78</option>
			<option value="79">79</option>
			<option value="80">80</option>
			<option value="81">81</option>
			<option value="82">82</option>
			<option value="83">83</option>
			<option value="84">84</option>
			<option value="85">85</option>
			<option value="86">86</option>
			<option value="87">87</option>
			<option value="88">88</option>
			<option value="89">89</option>
			<option value="90">90</option>
			<option value="91">91</option>
			<option value="92">92</option>
			<option value="93">93</option>
			<option value="94">94</option>
			<option value="95">95</option>
			<option value="96">96</option>
			<option value="97">97</option>
			<option value="98">98</option>
			<option value="99">99</option>
			<option value="100">100</option>
          </select></div>
	<div class="form-group"><label>Serial:</label><select class="form-control"  name='serial' class="inputOne"  id='serial' size='1' >
				<option value="<?php echo patient_info("serial",$id);?>"><?php echo patient_info("serial",$id);?> (Current)</option>
				<option value="PA">PA</option>
				<option value="PB">PB</option>
				<option value="PC">PC</option>
				<option value="PD">PD</option>
				<option value="PE">PE</option>
				<option value="PF">PF</option>
				<option value="PG">PG</option>
				<option value="PH">PH</option>
				<option value="PI">PI</option>
				<option value="PJ">PJ</option>
				<option value="PK">PK</option>
				<option value="PL">PL</option>
				<option value="PM">PM</option>
				<option value="PN">PN</option>
				<option value="PO">PO</option>
				<option value="PP">PP</option>
				<option value="PQ">PQ</option>
				<option value="PR">PR</option>
				<option value="PS">PS</option>
				<option value="PT">PT</option>
				<option value="PU">PU</option>
				<option value="PV">PV</option>
				<option value="PW">PW</option>
				<option value="PX">PX</option>
				<option value="PY">PY</option>
				<option value="PZ">PZ</option>
          </select></div>
	<div class="form-group"><label>Full Name:</label><input class="form-control"  name="name" type="text" value="<?php echo patient_info("name",$id);?>"  /></div>
	<div class="form-group"><label>Contact Number:</label><input class="form-control"  name="contact" type="text" value="<?php echo patient_info("contact",$id);?>" /></div>
	<hr>
	<div class="form-group"><label>Email:</label><input class="form-control"  name="email" type="text" value="<?php echo patient_info("email",$id);?>" /></div>
	<div class="form-group"><label>Weight:</label><input class="form-control"  name="weight" type="text" value="<?php echo patient_info("weight",$id);?>" /><i>(kg)</i></div>
	<div class="form-group"><label>Profession:</label><input class="form-control"  name="profession" type="text" value="<?php echo patient_info("profession",$id);?>" /></div>
	<div class="form-group"><label>Reference Contact:</label><input class="form-control"  name="ref_contact" value="<?php echo patient_info("ref_contact",$id);?>" type="text" /></div>
	<div class="form-group"><label>Address:</label><input class="form-control"  name="address" type="text" value="<?php echo patient_info("address",$id);?>" /></div>
    </ul>
	<input name="submit" class="btn btn-default formbutton theme-patients" name="submit" class="formbutton patient" type="submit" value="Update">
</form> 

</div>
</div> <!-- panel panel-default -->
</div> <!-- container -->

<?php sns_footer();?>