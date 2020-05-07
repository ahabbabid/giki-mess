<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">

                <form action="">
                    <div class="form-group">
                        <label for="meal">Meal</label>

                        <input id="meal" type="checkbox" class="form-control" v-model="formData.meal" name="meal">

                    </div>
                    <div v-for="(drink,index) in formData.drinks">
                        <div class="form-group">
                            <select name="drinks"  class="form-control" v-model="drink.type">
                                <option v-for="type in types">{{type}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" v-model="drink.quantity">
                            <button  class="form-control btn btn-info" @click.prevent="removeDrink(index)">x</button>
                        </div>



                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-info" @click.prevent="addDrink">Add Drink</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark form-control" @click.prevent="submitForm">Submit</button>
                    </div>

                </form>
                <h3>{{student}}</h3>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['student'],
        mounted() {
            console.log('Component mounted.')
        },

        data(){
            return {

                types:['coke', 'sprite', 'fanta'],
                formData: {

                    meal: 0,
                    drinks :[
                        {
                            type:'',
                            quantity:0
                        }

                    ]
                }
            }
        },
        methods:{
            removeDrink(index) {
                this.formData.drinks.splice(index);
            },
            addDrink(){
                this.formData.drinks.push({
                    type:'',
                    quantity:0
                })
            },
            submitForm(){
                axios.post('/sale/create', this.formData)
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            }
        }

    }
</script>
