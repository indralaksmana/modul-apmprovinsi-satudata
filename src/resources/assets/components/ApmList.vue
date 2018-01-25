<template>
    <div class="row">
        <div class="col-lg-12">
            <b-card header="Angka Partisipasi" header-tag="h4" class="bg-primary-card">
                <router-link to="create" class="btn btn-primary pull-right create-btn" style="margin-left: 5px;"><i class="ti-plus"></i> TAMBAH</router-link>
                <b-link href="/apmprovinsi/public/apmprovinsi/export/xlsx"class="btn btn-success pull-right create-btn"><i class="ti-printer"></i> PRINT EXCEL</b-link>
                <div class="table-responsive">
                    <datatable title="DAFTAR ANGKA PARTISPASI MURNI (APM) PROVINSI BANTEN" :rows="tableData" :columns="columndata1" :columns2="columndata2" :columns3="columndata3"></datatable>
                </div>
            </b-card>
        </div>
    </div>
</template>
<script>
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Vue from 'vue';
import datatable from "./plugins/DataTable/DataTable.vue";
export default {
    name: "apmlist",
    components: {
        datatable
    },
    data() {
        return {
            tableData: [],
            columndata1: [],
            columndata2: [],
            columndata3: []
        }
    },
    mounted() {
        axios.get("/getColumns")
            .then(response => {
                this.columndata1 = response.data.data1;
                this.columndata2 = response.data.data2;
                this.columndata3 = response.data.data3;
            })
            .catch(function(error) {});
        axios.get("/list")
            .then(response => {
                this.tableData = response.data;
            })
            .catch(function(error) {});
    }
}
</script>
<style>
    .create-btn{
        margin-bottom : 20px;
    }
    table > thead > tr > th{
        font-size: 13px;
    }
    table > tbody > tr > td{
        font-size: 13px;
    }
    .btn{
        font-size: 12px;
    }
</style>