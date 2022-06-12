@extends('layouts/base', ['title'=> ' Login'])

@section('content')
        <div class="container">
            <p>Home > <a href="#">Login</a></p>
           <div style="margin: 0em 1em 0.5em 0em;
                        padding-top: 0.5em;
                        font-weight: normal;
                        border: none;
                        font-family: Georgia, 'Times New Roman', Times, serif;
                        font-size: 1.6em;
                        text-shadow: 1px 1px 3px #000; ">LOGIN</div> 
             <div class="h4 pb-2 mb-4 text-dark border-bottom border-dark"></div>  
             
           <form action="#" class="form-group">
               <table>
                   <tr>
                       <td><label for="name">Username </label></td>
                        <td><input type="text" id="name" class="form-control input-group-sm"></td>
                   </tr>
                   <tr>
                       <td><label for="mdp">password </label></td>
                       <td><input type="password" id="mdp" class="form-control input-group-sm mb-2"></td>
                   </tr>
                   <tr>
                       <td></td>
                       <td>
                       <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="check" class="form-control">
                        <label class="form-check-label" for="check">Remember my username and password</label>
                        </div>
                       </td>
                   </tr>
                   <tr>
                       <td></td>
                       <td><button type="submit" class="btn btn-primary">Submit</button></td>
                   </tr>
               </table>
           </form>  
           <div class="mt-1">
               <ul>
                   <li><a href="/Registre">Not a user? Register with this site</a></li>
                   <li><a href="#">Forgot your password?</a></li>
               </ul>
           </div>
        </div>
@endsection   
