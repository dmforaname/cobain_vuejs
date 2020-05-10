<!DOCTYPE html>
<html>
<head>
  <title>Vue Testing</title>
</head>
<body>

<?php include_once('menu.php') ?>

<!-- menampilkan data dari app1 dengan metode mustaches -->
<div id="app1">
<span  v-if='tampil == 10'>{{ txt1 }}</span>
<span  v-else='tampil != 10'>{{ txt2 }}</span>
<br>
<span v-html="txt2"></span>
</div>

<!-- menampilkan data dari app2 dengan metode v-html -->
<div id="app2" v-if='!tampil' v-html="data"></div>

<!-- menampilkan array -->
<div id="arr" >
<span>Array = {{arr1}} {{arr1[2]}}</span>
<br>
<span v-html="arr1[0]"></span>
</div>

<?php include_once('script.php') ?>
<script>

//script untuk menampilkan data id="app1"
  var app1 = new Vue({
    el: '#app1',
    data: {
      txt1 : 'Hello Vue!',
      txt2 : '<b> Hello there! </b>',
      tampil : 10,

    }
  })

//script untuk menampilkan data id="app2"
var app2 = new Vue({
    el: '#app2',
    data: {
      data : '<b>Hello Vue!!</b>',
      tampil : false,
    }
  })

//array
var arr = new Vue({
  el: '#arr',
  data: {
    arr1 : ['satu','dua','tiga']
  }
})

</script>

</body>
</html>
