<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>数据加载测试</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
</head>
<body>
<div class="app">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>关键词</th>
            <th>展现量</th>
            <th>点击量</th>
            <th>直接交易额</th>
            <th>间接交易额</th>
            <th>直接成交笔数</th>
            <th>宝贝搜藏数</th>
            <th>店铺收藏数</th>
            <th>总的成交笔数</th>
            <th>成交总金额</th>
            <th>平均点击量花费</th>
            <th>投入产出比</th>
            <th>点击转化率</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="word in data" v-cloak>
            <th scope="row">@{{ word.id }}</th>
            <td>@{{ word.keyword }}</td>
            <td>@{{ word.show }}</td>
            <td>@{{ word.hit }}</td>
            <td>@{{ word.dtrade }}</td>
            <td>@{{ word.indtrade }}</td>
            <td>@{{ word.dcomplete }}</td>
            <td>@{{ word.collet }}</td>
            <td>@{{ word.shopcollet }}</td>
            <td>@{{ word.totalcomplete }}</td>
            <td>@{{ word.totalamount }}</td>
            <td>@{{ word.ahc }}</td>
            <td>@{{ word.ior}}</td>
            <td>@{{ word.ccr }}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>

<script src="/js/app.js"></script>
<script src="/test.txt"></script>
<script>
    new Vue({
        el: '.app',

        data: {
            id: 0,
            data: [],
            scroll: '',
            isloaded: false,
        },

        methods: {
            getData() {
                let id = this.id;

//                axios.get('/keywords', { params: { id: id } })
//                    .then(response => {
//                    let data = response.data.data;
//
//                this.data = this.data.concat(data);
//                this.id = data[data.length-1].id;
//            });
            },

            menu() {
                this.scroll = document.documentElement.scrollTop || document.body.scrollTop;
                let wheight = document.documentElement.clientHeight;
                let dheight = document.documentElement.offsetHeight;
                if(dheight-(this.scroll+wheight) < 10000 && !this.isloaded) {
                    this.isloaded = true;
                    this.getData();
                }

                if (dheight-(this.scroll+wheight) > 10000) {
                    this.isloaded = false;
                }
            }
        },

        created() {
            this.getData();
        },

        mounted() {
            window.addEventListener('scroll', this.menu);
        }
    })
</script>
</html>
