<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="assets/js/vue.js"></script>
</head>
<body>
    
<div id = "databinding">
         <component v-bind:is = "view"></component>
      </div>

    <script>
    
    var vm = new Vue({
            el: '#databinding',
            data: {
               view: 'component1'
            },
            components: {
               'component1': {
                  template: '<div><span style = "font-size:25;color:blue;">Dynamic Component</span></div>'
               }
            }
         });
    
    </script>
</body>
</html>