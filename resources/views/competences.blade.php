@extends('template')
@section('main')

<table class="table table-striped mt-5"> 
      <thead class="table-primary">
         <tr>
               <th scope="col">Code</th>
               <th scope="col">Label</th>
               <th scope="col">Description</th>
         </tr>
      </thead>
      <tbody class="table-light-white table-hover">
         @foreach($competence_list as $competence)
         <tr>
               <td>{{ $competence->code_comp}}</td>
               <td>{{ $competence->label_comp}}</td>
               <td>{{ $competence->description_comp}}</td>
         </tr>
         @endforeach
      </tbody>
</table>

@endsection
