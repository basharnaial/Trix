<template>
    <div class="login">
        <h1>Login</h1>
        <form>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" v-model="email">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" v-model="password">
            </div>
            <button type="button">Login</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: ''
        }
    }
}
</script>

<style scoped>
.login {
    max-width: 300px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
</style>
