<html>
   <head>
      <title>VueJs Instance</title>
      <script type = "text/javascript" src = "assets/js/vue.js"></script>
   </head>
   <body>
      <div id = "computed_props">
         FirstName : <input type = "text" v-model = "firstname" /> <br/><br/>
         LastName : <input type = "text" v-model = "lastname"/> <br/><br/>
         <h1>My name is {{firstname}} {{lastname}}</h1>
         <h1>Using computed method : {{getfullname}}</h1>
      </div>
      <!--script type = "text/javascript" src = "js/vue_computedprops.js"></script>-->
      <script>
      
      var vm = new Vue({
   el: '#computed_props',
   data: {
      firstname :"",
      lastname :"",
      birthyear : ""
   },
   computed :{
      getfullname : function(){
         return this.firstname +" "+ this.lastname;
      }
   }
})

      </script>
   </body>
</html>