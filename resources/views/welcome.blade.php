@extends('layouts.app')

@section('content') 
<div class="content-fixer">
<div class="page-header">   <h4>Recherche rapide
</h4></div>


<div class="row">

<div class="col-md-3">

<form method="GET" action="donors/">
<div class="form-group">
      <select name="group" class="form-control">
                                        <option value ="Select">type sangaine</option>
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
 
</div>

<div class="col-md-3">

 <div class="form-group">
      <input name="state" class="form-control" placeholder="Pays" required >
 
                          </div>
 
</div>
<div class="col-md-3">

 <div class="form-group">
    <input name="district" class="form-control" placeholder="Région" required >
 
                          </div>
</div>
<div class="col-md-3">

 <div class="form-group">
<div class="input-group">
      <input name="city" class="form-control" placeholder="Ville" required >
<span class="input-group-btn">
         <input type="submit" class="btn btn-default btn-info" value="Search">
      </span>
                      </div>           </div>
</form>

</div>
 </div>



<div class="page-header">   <h4> Tableau de compatibilité des globules rouges
 </h4></div>

<p>
<table class="table table-bordered table-striped table-hover table-responsive info-table">
  <thead align="right">
    <tr>
      <th>
        Recipient
      </th>
      <th colspan="8">
        Donor
      </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
         
      </td>
      <td>
       <b>O-</b>
      </td>
      <td>
        <b>  O+</b>
      </td>
      <td>
       <b> A-</b>
      </td>
      <td>
       <b>A+</b>
      </td>
      <td>
       <b>B-</b>
      </td>
      <td>
       <b> B+</b>
      </td>
      <td>
       <b> AB-</b>
      </td>
      <td>
       <b> AB+</b>
      </td>
    </tr>
    <tr>
      <td>
       <b>O-</b>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
    </tr>
    <tr>
      <td>
       <b>O+</b>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
    </tr>
    <tr>
      <td>
     <b>  A-</b>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
    </tr>
    <tr>
      <td>
     <b>  A+</b>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
    </tr>
    <tr>
      <td>
      <b> B-</b>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
    </tr>
    <tr>
      <td>
       <b>B+</b>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i> 
      </td>
      <td>
       
      </td>
      <td>
       
      </td>
    </tr>
    <tr>
      <td>
       <b>AB-</b>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
       
      </td>
    </tr>
    <tr>
      <td>
      <b>  AB+</b>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
      <td>
        <i class="fa fa-check"></i>
      </td>
    </tr> 
  </tbody>
</table>

</p>


<div class="page-header">   <h4>Pourquoi faire un don? </h4></div>
<div class="this">
<p>
 Le don de sang est simple et sûr. Il faut environ 10 à 15 minutes pour terminer le processus de don de sang. Tout adulte en bonne santé âgé de 18 à 60 ans peut donner du sang. Voici ce à quoi vous pouvez vous attendre lorsque vous êtes prêt à donner du sang:
</p>
<p>
    Vous entrez dans un centre de don de sang réputé et sûr ou dans un camp mobile organisé par une institution réputée. Quelques questions vous seront posées pour déterminer votre état de santé (questions générales sur la santé, historique des dons, etc.). Habituellement, il vous sera demandé de remplir un court formulaire.
    </p>
    <p>
    Ensuite, une vérification physique rapide sera effectuée pour vérifier la température, la pression artérielle, le pouls et la teneur en hémoglobine dans le sang pour vous assurer que vous êtes un donneur en bonne santé.
    </p>
<p>
    S'il est jugé bon de faire un don, on vous demandera de vous allonger sur une chaise ou un lit de repos. Votre bras sera soigneusement nettoyé. Ensuite, en utilisant des équipements stériles, le sang sera collecté dans un sac en plastique spécial. Environ 350 ml de sang seront collectés en un seul don. Ceux qui pèsent plus de 60 kg peuvent donner 450 ml de sang. Ensuite, vous devez vous reposer et vous détendre pendant quelques minutes avec une collation légère et quelque chose de rafraîchissant à boire. Quelques collations et jus seront fournis.
        </p>
<p>
    Le sang sera séparé en composants dans les huit heures suivant le don. Le sang sera ensuite acheminé au laboratoire pour analyse. Une fois trouvé sûr, il sera conservé dans un stockage spécial et libéré en cas de besoin. Le sang est maintenant prêt à être transporté à l'hôpital pour sauver des vies.

    </p>
</div>
<div class="page-header">   <h4>Donneurs récents
</h4></div>


   <div class="row">
                        
                         @foreach($users as $user)
                            <div class="col-md-4">    
                           <div class="thumbnail">
                           <a href="{{ url('donor/'.$user->id) }}"> {{ ucwords($user->name) }}</a> ( {{ ucwords($user->city) }} , {{ ucwords($user->district) }} , {{ ucwords($user->state) }} ) <div class="pull-right">{{ $user->group }}</div>
                            </div>
                            </div>
                         @endforeach


                         @if (count($users) == 0)
                          <div class="alert alert-info">Currently there is no donors.</div>
                         @endif
 
</div>
            
@endsection
