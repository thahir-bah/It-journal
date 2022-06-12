@extends('layouts/base', ['title'=> ' Register'])

@section('content')

<div class="container">
    <p><a href="/Home">Home</a>> <a href="/login">User</a> > <a href="#">Register</a></p>

    <div style="margin: 0em 1em 0.5em 0em;
                        padding-top: 0.5em;
                        font-weight: normal;
                        border: none;
                        font-family: Georgia, 'Times New Roman', Times, serif;
                        font-size: 1.6em;
                        text-shadow: 1px 1px 3px #000; ">REGISTER</div> 
             <div class="h4 pb-2 mb-4 text-dark border-bottom border-dark"></div> 

             <div>
                 <p>Fill in this form to register with this site.</p>
                 <p><a href="#">Click here </a>if you already registered with this or another journal on this site.</p>
             </div>
             <div style="margin: 0em 1em 0.25em 0em;
                        padding-top: 0.75em;
                        font-family: Verdana,Arial,Helvetica,sans-serif;
                        font-weight: normal;
                        font-size: 1.8em;
                        border: none;">
                 Profile
             </div>

             <form action="#">
                 <table>
                     <tr>
                         <td><label for="name" class="form-label">Username * </label></td>
                         <td><input type="text" id="name" class="form-control"><br>
                        <p>The username must contain only lowercase letters,number <br>and hyphens/underscores.</p></td>
                     </tr>
                     <tr>
                         <td><label for="pwd" class="form-label">Password * </label></td>
                         <td><input type="password" id="pwd" required class="form-control"><br>
                        <p>The password must be at least 6 characters.</p></td>
                     </tr>
                     <tr>
                         <td><label for="rpwd" class="form-label">Repeat password *</label></td>
                         <td><input type="password" id="rpwd" required class="form-control"></td>
                     </tr>
                     <tr>
                         <td><label for="val" class="form-label">Validation *</label></td>
                     </tr>
                     <tr>
                         <td><label for="fn" class="form-label">First Name * </label></td>
                         <td><input type="text" id="fn" required class="form-control"></td>
                     </tr>
                     <tr>
                         <td><label for="mn" class="form-label">Middle Name </label> </td>
                         <td><input type="text" id="mn" class="form-control"></td>
                     </tr>
                     <tr>
                         <td><label for="ln" class="form-label">Last Name *</label></td>
                         <td><input type="text" id="ln" required class="form-control"></td>
                     </tr>
                     <tr>
                         <td><label for="init" class="form-label">Initials</label></td>
                         <td><input type="text" id="init" class="form-control"> Joan Alice Smith = JAS</td>
                     </tr>
                     <tr>
                         <td><label for="genre" class="form-label">Gender</label></td>
                         <td><select class="form-select" size="1" aria-label=" ">
                            <option value="M">M</option>
                            <option value="F">F</option>
                             <option value="Other">Other</option>
                            </select></td>
                     </tr>
                     <tr>
                         <td><label for="af" class="form-label">Affilation </label></td>
                         <td><textarea name="af" id="af" cols="30" rows="10" class="form-control"></textarea><br>(Your institution, e.g. "Simon Fraser University")</td>
                     </tr>
                     <tr>
                         <td><label for="sg" class="form-label">Signature </label></td>
                         <td><textarea name="sg" id="sg" cols="30" rows="10" class="form-control"></textarea><br></td>
                     </tr>
                     <tr>
                         <td><label for="email" class="form-label">Email *</label></td>
                         <td><input type="mail" id="email" required class="form-control"><a href="#">PRIVACY STATEMENT</a></td>
                     </tr>
                     <tr>
                         <td><label for="cemail" class="form-label">Confirme email</label></td>
                         <td><input type="mail" id="cemail" class="form-control"></td>
                     </tr>
                     <tr>
                         <td><label for="orcidid" class="form-label">ORCID ID</label></td>
                         <td><input type="text" id="orcidid" class="form-control"><br>ORCID iDs can only be assigned by the ORCID Registry. You must conform to their standards for expressing ORCID iDs,<br> and include the full URI (eg. http://orcid.org/0000-0002-1825-0097).</td>
                     </tr>
                     <tr>
                         <td><label for="url" class="form-label">URL</label></td>
                         <td><input type="text" id="url" class="form-control"></td>
                     </tr>
                     <tr>
                         <td><label for="phone" class="form-label">Phone</label></td>
                         <td><input type="text" id="phone" class="form-control"></td>
                     </tr>
                     <tr>
                         <td><label for="fax" class="form-label">FAX</label></td>
                         <td><input type="text" id="fax" class="form-control"></td>
                     </tr>
                     <tr>
                         <td><label for="ma" class="form-label">Mailling Address</label></td>
                         <td><textarea name="ma" id="ma" cols="20" rows="10" class="form-control"></textarea></td>
                     </tr>
                     <tr>
                         <td><label for="country" class="form-label">Country </label></td>
                         <td><input type="text" id="country" class="form-control"></td>
                     </tr>
                     <tr>
                         <td><label for="bs" class="form-label">Bio Statement(E.g., department and rank)</label></td>
                         <td><textarea name="bs" id="bs" cols="20" rows="10" class="form-control"></textarea></td>
                     </tr>
                     <tr>
                         <td><label for="confirmation" class="form-label">Confirmation</label></td>
                         <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Send me a confirmation email including my username and password
                        </label></td>
                     </tr>
                     <tr>
                         <td><label for="register" class="form-label">Register as</label></td>
                         <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Author: Able to submit items to the journal.
                        </label</td>
                     </tr>
                     <tr>
                         <td><button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border:1px solid black;">regster</button>
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border:1px solid black">Cancel</button></td>
                        <td></td>
                     </tr>
                     <tr>
                         <td>* Denotes required field</td>
                         <td></td>
                     </tr>
                 </table>
             </form>
             <div>
                 <h2>Privacy Statement</h2>
             </div>
             <div>
             The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal and will not be made <br> available for any other purpose or to any other party.
             </div>
</div>
    
@endsection   
