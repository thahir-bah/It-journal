@extends('layouts/base', ['title'=> 'Search'])

@section('content')
        <div class="container">
            <p>Home > <a href="#">Search</a></p>
           <div style="margin: 0em 1em 0.5em 0em;
                        padding-top: 0.5em;
                        font-weight: normal;
                        border: none;
                        font-family: Georgia, 'Times New Roman', Times, serif;
                        font-size: 1.6em;
                        text-shadow: 1px 1px 3px #000; ">Search</div> 
             <div class="h4 pb-2 mb-4 text-dark border-bottom border-dark"></div>  
             <div class="container-fluid ">Search for <form class="d-inline" role="search">
      <input class="form-control d-inline" type="search" placeholder="Search" aria-label="Search" style="color:black;
        -moz-border-radius: 30px;
        -webkit-border-radius: 30px;
        border-radius: 30px;
		width:60%;
		border: 4px solid black;">
      <button class="btn btn-outline-primary bg-primary text-dark" type="submit">Search</button>
    </form></div><br><br>
    <div class="btn-group">
  <button type="button" class="btn btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
  </div>
        <div id="emptyFilters" class="dropdown-menu">
	<div class="container dropdown-item">
						<table class="data">
											<tr valign="top">
							<td colspan="2" class="label"><h4>Search categories</h4></td>
						</tr>
								<tr>
		<td class="label">
			<label for="authors">Authors</label>
		</td>
		<td class="value">
																<input type="text" name="authors" id="authors" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
								<tr>
		<td class="label">
			<label for="title">Title</label>
		</td>
		<td class="value">
																<input type="text" name="title" id="title" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
								<tr>
		<td class="label">
			<label for="abstract">Abstract</label>
		</td>
		<td class="value">
																<input type="text" name="abstract" id="abstract" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
								<tr>
		<td class="label">
			<label for="galleyFullText">Full Text</label>
		</td>
		<td class="value">
																<input type="text" name="galleyFullText" id="galleyFullText" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
								<tr>
		<td class="label">
			<label for="suppFiles">Supplementary File(s)</label>
		</td>
		<td class="value">
																<input type="text" name="suppFiles" id="suppFiles" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
																<tr valign="top">
							<td colspan="2" class="formSubLabel"><h4>Publication Date</h4></td>
						</tr>
								<tr>
		<td class="label">
			<label for="dateFrom">From</label>
		</td>
		<td class="value">
							<select name="dateFromMonth" class="selectMenu">
<option label="" value="" selected="selected"></option>
<option label="January" value="01">January</option>
<option label="February" value="02">February</option>
<option label="March" value="03">March</option>
<option label="April" value="04">April</option>
<option label="May" value="05">May</option>
<option label="June" value="06">June</option>
<option label="July" value="07">July</option>
<option label="August" value="08">August</option>
<option label="September" value="09">September</option>
<option label="October" value="10">October</option>
<option label="November" value="11">November</option>
<option label="December" value="12">December</option>
</select>
<select name="dateFromDay" class="selectMenu">
<option label="" value="" selected="selected"></option>
<option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5">05</option>
<option label="06" value="6">06</option>
<option label="07" value="7">07</option>
<option label="08" value="8">08</option>
<option label="09" value="9">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
<option label="13" value="13">13</option>
<option label="14" value="14">14</option>
<option label="15" value="15">15</option>
<option label="16" value="16">16</option>
<option label="17" value="17">17</option>
<option label="18" value="18">18</option>
<option label="19" value="19">19</option>
<option label="20" value="20">20</option>
<option label="21" value="21">21</option>
<option label="22" value="22">22</option>
<option label="23" value="23">23</option>
<option label="24" value="24">24</option>
<option label="25" value="25">25</option>
<option label="26" value="26">26</option>
<option label="27" value="27">27</option>
<option label="28" value="28">28</option>
<option label="29" value="29">29</option>
<option label="30" value="30">30</option>
<option label="31" value="31">31</option>
</select>
<select name="dateFromYear" class="selectMenu">
<option label="" value="" selected="selected"></option>
<option label="2011" value="2011">2011</option>
<option label="2012" value="2012">2012</option>
<option label="2013" value="2013">2013</option>
<option label="2014" value="2014">2014</option>
<option label="2015" value="2015">2015</option>
<option label="2016" value="2016">2016</option>
<option label="2017" value="2017">2017</option>
<option label="2018" value="2018">2018</option>
<option label="2019" value="2019">2019</option>
<option label="2020" value="2020">2020</option>
<option label="2021" value="2021">2021</option>
<option label="2022" value="2022">2022</option>
<option label="2023" value="2023">2023</option>
</select>
												</td>
	</tr>
								<tr>
		<td class="label">
			<label for="dateTo">Until</label>
		</td>
		<td class="value">
							<select name="dateToMonth" class="selectMenu">
<option label="" value="" selected="selected"></option>
<option label="January" value="01">January</option>
<option label="February" value="02">February</option>
<option label="March" value="03">March</option>
<option label="April" value="04">April</option>
<option label="May" value="05">May</option>
<option label="June" value="06">June</option>
<option label="July" value="07">July</option>
<option label="August" value="08">August</option>
<option label="September" value="09">September</option>
<option label="October" value="10">October</option>
<option label="November" value="11">November</option>
<option label="December" value="12">December</option>
</select>
<select name="dateToDay" class="selectMenu">
<option label="" value="" selected="selected"></option>
<option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5">05</option>
<option label="06" value="6">06</option>
<option label="07" value="7">07</option>
<option label="08" value="8">08</option>
<option label="09" value="9">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
<option label="13" value="13">13</option>
<option label="14" value="14">14</option>
<option label="15" value="15">15</option>
<option label="16" value="16">16</option>
<option label="17" value="17">17</option>
<option label="18" value="18">18</option>
<option label="19" value="19">19</option>
<option label="20" value="20">20</option>
<option label="21" value="21">21</option>
<option label="22" value="22">22</option>
<option label="23" value="23">23</option>
<option label="24" value="24">24</option>
<option label="25" value="25">25</option>
<option label="26" value="26">26</option>
<option label="27" value="27">27</option>
<option label="28" value="28">28</option>
<option label="29" value="29">29</option>
<option label="30" value="30">30</option>
<option label="31" value="31">31</option>
</select>
<select name="dateToYear" class="selectMenu">
<option label="" value="" selected="selected"></option>
<option label="2011" value="2011">2011</option>
<option label="2012" value="2012">2012</option>
<option label="2013" value="2013">2013</option>
<option label="2014" value="2014">2014</option>
<option label="2015" value="2015">2015</option>
<option label="2016" value="2016">2016</option>
<option label="2017" value="2017">2017</option>
<option label="2018" value="2018">2018</option>
<option label="2019" value="2019">2019</option>
<option label="2020" value="2020">2020</option>
<option label="2021" value="2021">2021</option>
<option label="2022" value="2022">2022</option>
<option label="2023" value="2023">2023</option>
</select>
									<input type="hidden" name="dateToHour" value="23" />
					<input type="hidden" name="dateToMinute" value="59" />
					<input type="hidden" name="dateToSecond" value="59" />
												</td>
	</tr>
																<tr valign="top">
							<td colspan="2" class="label"><h4>Index terms</h4></td>
						</tr>
								<tr>
		<td class="label">
			<label for="discipline">Discipline(s)</label>
		</td>
		<td class="value">
																<input type="text" name="discipline" id="discipline" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
								<tr>
		<td class="label">
			<label for="subject">Keyword(s)</label>
		</td>
		<td class="value">
																<input type="text" name="subject" id="subject" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
								<tr>
		<td class="label">
			<label for="type">Type (method/approach)</label>
		</td>
		<td class="value">
																<input type="text" name="type" id="type" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
								<tr>
		<td class="label">
			<label for="coverage">Coverage</label>
		</td>
		<td class="value">
																<input type="text" name="coverage" id="coverage" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
								<tr>
		<td class="label">
			<label for="indexTerms">All index term fields</label>
		</td>
		<td class="value">
																<input type="text" name="indexTerms" id="indexTerms" size="40" maxlength="255" value="" class="textField" />
												</td>
	</tr>
									</table>
				<p><input type="submit" value="Search" class="button defaultButton" /></p>
			
	</div>
</div>
<div style="clear:both"></div>			</form>
</div>  
</div> <br><br>
        
        <div style="border-top: 1px dotted #000;
            font-size: 0.1em;
            line-height: 1%;"></div>
        <div class="container-fluid"><div class="d-inline me-5 pe-5 float-end">ISSUE</div>
        <div class="d-inline ms-5 text-center">TITLE</div></div><br>
        <div style="border-top: 1px dotted #000;
            font-size: 0.1em;
            line-height: 1%;"></div>
            <div class="text-center">No resultat</div>
            <div style="border-top: 1px dotted #000;
            font-size: 0.1em;
            line-height: 1%;"></div><br><br>
        <div style="color: #666666; font-family: Verdana,Arial,Helvetica,sans-serif;"><h4>Search tips:</h4></div>
        <div style="color: #111;font-family: Verdana,Arial,Helvetica,sans-serif;">
            <ul>
                <li>Search terms are case-insensitive</li>
                <li>Common words are ignored</li>
                <li>By default only articles containing all terms in the query are returned (i.e., AND is implied)</li>
                <li>Combine multiple words with OR to find articles containing either term; e.g., education OR research</li>
                <li>Use parentheses to create more complex queries; e.g., archive ((journal OR conference) NOT theses)</li>
                <li>Search for an exact phrase by putting it in quotes; e.g., "open access publishing"</li>
                <li>Exclude a word by prefixing it with - or NOT; e.g. online -politics or online NOT politics</li>
                <li>Use * in a term as a wildcard to match any sequence of characters; e.g., soci* morality would <br> match documents containing "sociological" or "societal"</li>
            </ul>
        </div>
</div>>   
@endsection   
