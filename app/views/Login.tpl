{extends file="templates\blankMain.tpl"}
{block name = "main"}
{assign var="title" value="Login"}

    <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark ">
          <form action="{url action='loginValidate'}" method="post" >
            <img class="mb-4 img-fluid" src="{url}/resources/yuumbread.svg" alt="" width="156" height="88">
            <h1 class="h3 mb-3 fw-normal">Logowanie</h1>

            <div class="form-floating">
              <input type="login" class="form-control" name='loginInput' maxlength="20" id="loginInput" placeholder="Login">
              <label for="loginInput">Login</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" name='passwordInput' maxlength="45" id="passwordInput" placeholder="Password">
              <label for="passwordInput">Hasło</label>
            </div>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Zapamiętaj mnie
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Zaloguj</button>
            
          </form>
           
        </div>
        <div class= "text-center mb-auto  mx-auto dark ">
            {include file="components/messages.tpl"}  
        </div>    
        
        
    </div>


   
{/block}
