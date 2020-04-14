<template>
    <div>
        <label>Name</label>
        <input type="text" id="name" v-model="name" name="name" size="5"/>

        <label>bedrooms</label>
        <input type="number" v-model="bedrooms" width="2" min="0" max="15" size="2"  onkeydown="return false" />

        <label>bathrooms</label>
        <input type="number" v-model="bathrooms" min="0" max="15" size="2"  onkeydown="return false"/>

        <label>storeys</label>
        <input type="number" v-model="storeys" min="0" max="15" size="2"  onkeydown="return false" />

        <label>garages</label>
        <input type="number" v-model="garages" min="0" max="15" size="2" onkeydown="return false"/>

        <label>price</label>
        <input type="number" v-model="price_from" size="5"/>

        <input type="number" v-model="price_to" size="5" />


        <button class="btn btn-primary" v-on:click="seach()">
            Найти
        </button>

        <div v-if="seachProcess=='true'">
            <img :src="'/images/loader.png'" height="150">
        </div>
        <div v-if="seachProcess=='empty'">
            <div>No data</div>
        </div>
        <div v-else>
            <table class="table  table-striped align-content-center" align="center" width="sm-1">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">bedrooms</th>
                    <th scope="col">bathrooms</th>
                    <th scope="col">storeys</th>
                    <th scope="col">garages</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="item in houseArray" style="cursor:pointer">
                    <td>{{item.name}}</td>
                    <td>{{item.price}}</td>
                    <td>{{item.bedrooms}}</td>
                    <td>{{item.bathrooms}}</td>
                    <td>{{item.storeys}}</td>
                    <td>{{item.garages}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log("mount");
        },
        data() {
            return {
                name: "",
                bedrooms: "",
                bathrooms: "",
                storeys: "",
                garages: "",
                price_from: "",
                price_to: "",
                houseArray: [],
                seachProcess: false,
            }
        },
        methods: {
            seach() {
                this.seachProcess = true;
                axios.get('house', {
                    params: {
                        name: this.name,
                        bedrooms: this.bedrooms,
                        bathrooms: this.bathrooms,
                        storeys: this.storeys,
                        garages: this.garages,
                        price_from: this.price_from,
                        price_to: this.price_to
                    }
                }).then((response) => {
                    this.seachProcess = false;
                    let data = response.data;
                    let temp = data;
                    this.houseArray = [];
                    if (temp.length > 0) {
                        for (let i = 0; i < temp.length; i++) {
                            this.houseArray.push(temp[i]);
                        }
                    } else {
                        this.seachProcess = 'empty'
                    }
                }).catch();
            },
        }

    }
</script>

<style scoped>

</style>