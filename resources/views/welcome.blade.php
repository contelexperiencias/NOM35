@extends('layouts.appfront')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Guía de Referencia III</h1>

<div class="row">

  <div class="col">

    <div class="card shadow mb-4" v-for="(section, index) in sections">
      <!-- Card Header - Accordion -->
      <a :href="'#collapseCardExample' + index" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" :aria-controls="'collapseCardExample' + index">
        <!-- <h6 class="m-0 font-weight-bold text-primary">{{ section.headline }}</h6> -->
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" :id="'collapseCardExample' + index">
        <div class="card-body">
          <div v-for="question in questions" v-if="question.section === section.section">
            <!-- <p class="text-gray-800">{{ question.item }}. {{ question.question }}</p> -->
            <div class="form-group">
              <div class="custom-control custom-radio small">
                <input
                  type="radio"
                  class="custom-control-input"
                  :id="'item' + question.item + 'radio1'"
                  :name="'item' + question.item"
                  value="0"
                  v-model="answers[question.item]"
                >
                <label
                  class="custom-control-label text-gray-800"
                  :for="'item' + question.item + 'radio1'">
                  Siempre
                </label>
              </div>
              <div class="custom-control custom-radio small">
                <input
                  type="radio"
                  class="custom-control-input"
                  :id="'item' + question.item + 'radio2'"
                  :name="'item' + question.item"
                  value="1"
                  v-model="answers[question.item]"
                >
                <label
                  class="custom-control-label text-gray-800"
                  :for="'item' + question.item + 'radio2'">
                  Casi siempre
                </label>
              </div>
              <div class="custom-control custom-radio small">
                <input
                  type="radio"
                  class="custom-control-input"
                  :id="'item' + question.item + 'radio3'"
                  :name="'item' + question.item"
                  value="2"
                  v-model="answers[question.item]"
                >
                <label
                  class="custom-control-label text-gray-800"
                  :for="'item' + question.item + 'radio3'">
                  Algunas veces
                </label>
              </div>
              <div class="custom-control custom-radio small">
                <input
                  type="radio"
                  class="custom-control-input"
                  :id="'item' + question.item + 'radio4'"
                  :name="'item' + question.item"
                  value="3"
                  v-model="answers[question.item]"
                >
                <label
                  class="custom-control-label text-gray-800"
                  :for="'item' + question.item + 'radio4'">
                  Casi nunca
                </label>
              </div>
              <div class="custom-control custom-radio small">
                <input
                  type="radio"
                  class="custom-control-input"
                  :id="'item' + question.item + 'radio5'"
                  :name="'item' + question.item"
                  value="4"
                  v-model="answers[question.item]"
                >
                <label
                  class="custom-control-label text-gray-800"
                  :for="'item' + question.item + 'radio5'">
                  Nunca
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-gray-800">
        Para terminar, complete los siguientes datos
      </div>
      <div class="card-body">
        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user" placeholder="Nombre completo" v-model="userName">
          </div>
          <div class="col-sm-3 mb-3 mb-sm-0">
            <select class="form-control" v-model="userAge">
              <option value="0">Seleccione su edad</option>
              <option value="1">de 18 a 25</option>
              <option value="2">de 26 a 29</option>
              <option value="3">de 30 a 35</option>
              <option value="4">de 36 a 39</option>
              <option value="5">de 40 a 45</option>
              <option value="6">de 46 a 49</option>
              <option value="7">de 50 a 55</option>
              <option value="8">de 56 a 59</option>
              <option value="9">más de 60</option>
            </select>
          </div>
          <div class="col-sm-3 mb-3 mb-sm-0">
            <select class="form-control" v-model="userGenre">
              <option value="0">Seleccione su sexo</option>
              <option value="1">Masculino</option>
              <option value="2">Femenino</option>
              <option value="3">Otro</option>
              <option value="4">Prefiero mantenerlo privado</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <select class="form-control" v-model="userPosition">
              <option value="0">Seleccione su puesto de trabajo</option>
            </select>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <select name="" id="" class="form-control" v-model="userSeniority">
              <option value="0">¿Cuánto tiempo lleva laborando en la empresa?</option>
              <option value="0">Menos de 1 año</option>
              <option value="1">Más de 1 año, menos de 2 años</option>
              <option value="2">Más de 2 años, menos de 3 años</option>
              <option value="3">Más de 3 años, menos de 4 años</option>
              <option value="4">Más de 4 años, menos de 5 años</option>
              <option value="5">Más de 5 años, menos de 6 años</option>
              <option value="6">Más de 6 años, menos de 7 años</option>
              <option value="7">Más de 7 años, menos de 8 años</option>
              <option value="8">Más de 8 años, menos de 9 años</option>
              <option value="9">Más de 9 años, menos de 10 años</option>
              <option value="10">Más de 10 años</option>
            </select>
          </div>
        </div>

        <button
          class="btn btn-primary btn-icon-split btn-lg"
          @click="saveUserAndAnswers"
        >
          <span class="icon text-white-50">
            <i class="fas fa-check"></i>
          </span>
          <span class="text">Guardar y terminar cuestionario</span>
        </button>
        <div v-html="total" style="padding: 1rem;"></div>
      </div>
    </div>

  </div>
  
</div>

<div class="row" style="display: none !important;">

  <div class="col">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Usuario</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Puesto</th>
                <th>Fecha</th>
                <th>Total</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Usuario</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Puesto</th>
                <th>Fecha</th>
                <th>Total</th>
              </tr>
            </tfoot>
            <tbody>
              <tr v-for="answer in answersCollection">
                <!-- <td>{{ answer.user_id }}</td>
                <td>{{ answer.age }}</td>
                <td>{{ answer.sex }}</td>
                <td>{{ answer.position }}</td>
                <td>{{ answer.date }}</td>
                <td>{{ answer.total }}</td> -->
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection