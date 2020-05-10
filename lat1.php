<!DOCTYPE html>
<html>
<head>
  <title>Computed Methods Watcher</title>
</head>
<body>

<?php include_once('menu.php') ?>

<!-- Computed -->
<div id="appcompute">
  <pre>
  <b>{{title}}</b>
  Data 1 : {{data1}}
  Data 2 : {{data2}}
  Penjumlahan : {{jumlah}}
  pengurangan : {{hasil}}
  </pre>
</div>
<hr>

<!-- Methods -->
<div id="appmethods">
  <pre>
  <b>{{title}}</b>
  Data 1 : {{data1}}
  Data 2 : {{data2}}
  jawaban1 : {{jawaban1}}
  jawaban2 : {{jawaban2}}
  Penjumlahan : {{jumlah}}
  pengurangan : {{hasil}} <br>
  <button v-on:click='ditambah'>Tambah</button>  <button v-on:click='dikurang'>Kurang</button> <button v-on:click='kosong'>Reset</button>

  </pre>
</div>
<hr>
<div id="appwatcher">
  <pre>
  <b>{{title}}</b>
  <input type="text" v-model='input'> {{desc}}
  </pre>
</div>

<div id="appwatcher2">
  <pre>
  <b>{{title}}</b><small> ketik test</small>
  <input type="text" v-model='input'> {{desc}}
  </pre>
</div>

<hr>

<div id="login">
  <pre>
  <b>{{title}}</b>
  <input type="password" v-model='input' placeholder="Type Password"> <input type="password" v-model='input2' placeholder="Confirm Password">
  {{desc}}
  <input type="submit" value="SignUp" v-if="tampil">
  </pre>
</div>


<?php include_once('script.php') ?>

<script>

//Computed
var appcompute = new Vue({
  el: '#appcompute',
  data:{
    title: 'Computed!',
    data1: 10,
    data2: 20,
  },
  computed: {
    jumlah: function(){
        return this.data1 + this.data2
    },
    hasil: function(){
        return this.data2 - this.data1
    }
  },

})

//Methods
var appmethods = new Vue({
  el: '#appmethods',
  data:{
    title: 'Methods!',
    data1: 100,
    data2: 200,
    jumlah: null,
    hasil: null,
  },
  computed:{
    jawaban1: function(){
        return this.data1 + this.data2
    },
    jawaban2: function(){
        return this.data2 - this.data1
    }
  },
  methods: {
    ditambah(){
        return this.jumlah = this.data1 + this.data2
    },
    dikurang(){
        return this.hasil = this.data2 - this.data1
    },
    kosong(){
      return this.jumlah= null,   this.hasil= null
    }
  },

})

var appwatcher = new Vue({
  el: '#appwatcher',
  data:{
    title: 'Watcher!',
    input: '',
    desc: '',
  },
  watch:{
    input: function(){
      this.desc = 'sedang mengetik ...'
    },
  }
})

var appwatcher2 = new Vue({
  el: '#appwatcher2',
  data:{
    title: 'Watcher2!',
    input: '',
    desc: '',
  },
  watch:{

  input: 'ketik'
  },
  methods:{
    ketik: function(){
      if (this.input == 'test'){
        this.desc = 'tist'
      }else{
        this.desc = 'sedang mengetik'
      }
    }
  }
})

var login = new Vue({
  el: '#login',
  data:{
    title : 'Watcher Login!',
    input : '',
    input2: '',
    desc  : '',
  }
})

</script>

</body>
</html>
