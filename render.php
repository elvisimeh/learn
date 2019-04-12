<html>
   <head>
      <title>VueJs Instance</title>
      <script type = "text/javascript" src = "assets/js/vue.js"></script>
   </head>
   <body>
      <div id = "databinding">
         <button v-on:click = "showdata" v-bind:style = "styleobj">Click Me</button>
         <span style = "font-size:25px;"><b>{{show}}</b></span>
         <h1 v-if = "show">This is h1 tag</h1>
         <h2>This is h2 tag</h2>
      </div>
      <div contenteditable="true">
  This text can be edited by the user.
</div>
      <script type = "text/javascript">
         var vm = new Vue({
            el: '#databinding',
            data: {
               show: true,
               styleobj: {
                  backgroundColor: '#2196F3!important',
                  cursor: 'pointer',
                  padding: '8px 16px',
                  verticalAlign: 'middle',
               }
            },
            methods : {
               showdata : function() {
                  this.show = !this.show;
               }
            },
         });
      </script>
   </body>
</html>