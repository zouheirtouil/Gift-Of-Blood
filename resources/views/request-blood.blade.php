@extends('layouts.app')

@section('content') 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Demander du sang</div>

                <div class="panel-body">

            <form action="request-blood" method="post" >

            {{ csrf_field() }}
 
            <div class="form-group">
                   <input type="text" name="patient" class="form-control"  placeholder="Nom de Patient" required>
            </div>

                 <div class="form-group">
                  <select name="group" class="form-control">
                                       <option value ="AB +">AB +</option>
                                        <option value ="AB -">AB -</option>
                                        <option value ="A +">A +</option>
                                        <option value ="A -">A -</option>
                                        <option value ="B +">B +</option>
                                        <option value ="B -">B -</option>
                                        <option value ="O +">O +</option>
                                        <option value ="O -">O -</option>
                                    

                                 </select>
            </div>

 
     <div class="form-group">
                   <input type="text" name="state" class="form-control"  placeholder="Pays" required>
            </div>



    <div class="form-group">
                   <input type="text" name="district" class="form-control"  placeholder="Région" required>
            </div>



    <div class="form-group">
                   <input type="text" name="city" class="form-control"  placeholder="Ville" required>
            </div>



                       <div class="form-group">
                   <textarea name="hospital" placeholder="Nom d'Hotpital & Addresse" class="form-control" required></textarea>
            </div>



     <div class="form-group">
                   <input type="text" name="contact_person" class="form-control"  placeholder="Contacte de Personne" required>
            </div>


    <div class="form-group">
                   <input type="email" name="contact_email" class="form-control"  placeholder="Contacte Email" required>
            </div>

                <div class="form-group">
                   <input type="number" name="contact_phone" class="form-control"  placeholder="Contact téléphone" required>
            </div>


      <div class="form-group">
                   <input type="date" name="when" class="form-control"  placeholder="When required" id="datetimepicker" required>
            </div>


            <input type="submit" class="btn btn-default" value="Demander">
            </form>


                </div>
            </div>
        </div>
    </div> 
@endsection
