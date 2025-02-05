<style>
    h1 {
        color: #FF0000;
        font-size: 54px;
    }
    a{
        font-size: 22px;
        color: #333;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    .error-screen{
        display: flex;
        flex-direction: column;    
        align-items: center;       
        justify-content: center;   
        gap: 30px;
        height: 80vh;
        text-align: center;       
    }
</style>

<?php get_header(); ?>
<div class="error-screen">
<h1>Oops the page youre looking for doesnt exist.</h1>
<a href="#">Return home</a>
</div>

<?php get_footer(); ?>