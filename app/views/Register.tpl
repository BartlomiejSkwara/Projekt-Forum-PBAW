{extends file="templates\main.tpl"}
{block name = "main"}
{assign var="title" value="Register"}

    <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark ">
          <form action="{url action='registerValidate'}" method="post" >
            <img class="mb-4 img-fluid" src="{url}/resources/yuumbread.svg" alt="" width="156" height="88">
            <h1 class="h3 mb-4 fw-normal display-5">Rejestracja</h1>

            <div class="form-floating mb-3">
              <input type="login" class="form-control" name='loginInput' maxlength="20" id="loginInput" placeholder="Login"
                     value="{strip}
                     {if isset($previousForm->login)}
                        {$previousForm->login}
                    {/if}
                   {/strip}">
              <label for="loginInput">Login</label>
            </div>
            
            
            
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name='emailInput' maxlength="45" id="passwordInput" placeholder="Email"
                       value="{strip}
                     {if isset($previousForm->email)}
                        {$previousForm->email}
                    {/if}
                   {/strip}">
              <label for="emailInput">Email</label>
            </div>
            
            <div class="form-floating mb-5 is-invalid">
              <input type="password" class="form-control" name='passwordInput' maxlength="45" id="passwordInput" placeholder="Password"
                     value="{strip}
                     {if isset($previousForm->password)}
                        {$previousForm->password}
                    {/if}
                   {/strip}">
              <label for="passwordInput">Hasło</label>
            </div>


            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Zarejestruj</button>
            
          </form>
           
        </div>
        <div class= "text-center mb-auto  mx-auto dark ">
            {include file="components/messages.tpl"}  
        </div>    
        
        
    </div>


   
{/block}
