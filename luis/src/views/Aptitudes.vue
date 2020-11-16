<template>
<!-- Titulo -->
    <div> 
    
       <div class="container">
      <div class="row">
        <div class="m-auto">
        <h3 class="title">Skills</h3>
        <hr style="width: 100%; border: 1px solid#fff;"/>
            <form>
              <div class="form-row estilo-formulario mb-3 p-4 aptitude-form">
                  <ejs-multiselect :dataSource='remoteData' 
                      :fields='remoteFields' placeholder='Select a name'
                      popupWidth="550px"
                      popupHeight="200px"
                      sortOrder='Descending'>
                  </ejs-multiselect>
              </div>
              
              <div class="form-group col-md-12 d-flex justify-content-end">
              <button
                type="submit"
                class="btn btn-primary btn-next"
                id="btn-next"
                onclick="nextDiv()"
              >
                Enviar
              </button>
              </div>
            </form>
        </div>
      </div>
    </div>
    </div>
</template>

<style>
  @import url(https://cdn.syncfusion.com/ej2/material.css);
</style>

<script>
import Vue from 'vue';
import{ MultiSelectPlugin } from '@syncfusion/ej2-vue-dropdowns';
Vue.use(MultiSelectPlugin);
import{ DataManager, WebApiAdaptor } from '@syncfusion/ej2-data';
var remoteDataSource = new DataManager({
   url: 'https://ej2services.syncfusion.com/production/web-services/api/Employees',
   adaptor: new WebApiAdaptor,
   crossDomain: true
});
export default Vue.extend({
  data: function() {
    return {
      remoteData: remoteDataSource,
      remoteFields: {text: 'FirstName',  value: 'EmployeeID'},
     /* localData:[
        { Id: 'game1', Game: 'Football' },
        { Id: 'game2', Game: 'Basketball' },
        { Id: 'game3', Game: 'Volleyball' }
      ],
      localFields:{value: 'Id', text: 'Game' }*/
    };
  }
});
</script>