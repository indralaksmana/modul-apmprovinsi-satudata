<template>
    <div class="row">
        <div class="col-lg-12">
            <b-card class="mb-2 bg-default-card" header="Tambah PDRB Harga Berlaku" header-tag="h4">
                <div>
                    <vue-form :state="formstate" @submit.prevent="onSubmit">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <validate tag="div">
                                        <label for="apmprovinsiName"> Kategori</label>
                                        <select name="apmprovinsiName" class="form-control" id="apmprovinsiName" v-model="apmprovinsiName" required checkbox>
                                            <option value="0" selected disabled>Pilih Kategori</option>
                                            <option value="SD/MI/Paket A">SD/MI/Paket A</option>
                                            <option value="SMP/MTs/Paket B">SMP/MTs/Paket B</option>
                                            <option value="SMA/SMK/MA/Paket C">SMA/SMK/MA/Paket C</option>
                                        </select>
                                        <field-messages name="apmprovinsiName" show="$invalid && $submitted" class="text-danger">
                                            <div slot="checkbox">Kategori dibutuhkan.</div>
                                        </field-messages>
                                    </validate>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <validate tag="div">
                                        <label for="apmprovinsiTgl"> Tanggal</label>
                                        <input type="date" name="apmprovinsiTgl" class="form-control input-sm" id="apmprovinsiTgl" value="yyyy-mm-dd" aria-selected="true" v-model="apmprovinsiTgl" required>
                                        <field-messages name="apmprovinsiTgl" show="$invalid && $submitted" class="text-danger">
                                            <div slot="required">Tanggal dibutuhkan.</div>
                                        </field-messages>
                                    </validate>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <validate tag="div">
                                        <label for="apmprovinsiBanten"> Jumlah Provinsi Banten</label>
                                        <input type="number" name="apmprovinsiBanten" class="form-control input-sm" id="apmprovinsiBanten" placeholder="Masukkan Jumlah" v-model="apmprovinsiBanten" required>
                                        <field-messages name="apmprovinsiBanten" show="$invalid && $submitted" class="text-danger">
                                            <div slot="required">Jumlah Provinsi Banten dibutuhkan.</div>
                                        </field-messages>
                                    </validate>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <validate tag="div">
                                        <label for="apmprovinsiIndonesia"> Jumlah Provinsi Indonesia</label>
                                        <input type="number" name="apmprovinsiIndonesia" class="form-control input-sm" id="apmprovinsiIndonesia" placeholder="Masukkan Jumlah" v-model="apmprovinsiIndonesia" required>
                                        <field-messages name="apmprovinsiIndonesia" show="$invalid && $submitted" class="text-danger">
                                            <div slot="required">Jumlah Provinsi Indonesia dibutuhkan.</div>
                                        </field-messages>
                                    </validate>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <b-button type="submit" size="md" variant="primary">
                                        <i class="ti-save"></i> Simpan
                                    </b-button>
                                    <router-link to="/" class="btn btn-danger"><i class="ti-arrow-left"></i> KEMBALI</router-link>
                                </div>
                            </div>
                        </div>
                    </vue-form>
                </div>
            </b-card>
        </div>
    </div>
</template>
<script>
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
export default {
    name: "ApmCreate",
    data() {
        return {
            apmprovinsiName: 0,
            apmprovinsiTgl: "",
            apmprovinsiBanten: 0,
            apmprovinsiIndonesia: 0,
            formstate: {}
        }
    },
    methods: {
        onSubmit: function() {
            if (this.formstate.$invalid) {
                return;
            } else {
                axios.post('/create', {
                    apmprovinsiName: this.apmprovinsiName,
                    apmprovinsiTgl: this.apmprovinsiTgl,
                    apmprovinsiBanten: this.apmprovinsiBanten,
                    apmprovinsiIndonesia: this.apmprovinsiIndonesia
                })
                .then(response => {
                    this.$router.push({ name: 'list'})
                })
                .catch(function(error) {});
            }

        }
    },
    destroyed: function() {

    }
}
</script>