<!-- à retirer pendant le test-->
<link rel="stylesheet" href="contact.css"> 

<form class="menudubaspartiecentre">
    <span class="Nous_contacter_titre">
    Nous contacter
    </span>
    <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre nom et prénom">
        <input class="Nous_contacter_imput" type="text" name="name" placeholder="Nom et Prénom">
        <span class="focus-Nous_contacter"></span>
    <span></span></div>
    <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre adresse mail valide: e@a.x">
        <input class="Nous_contacter_imput" type="text" name="email" placeholder="E-mail" >
        <span class="focus-Nous_contacter"></span>
    <span></span></div>
    <div class="<Nous_contacter_collect>" data-validate="Merci de renseigner votre message.">
        <textarea class="Nous_contacter_imput_textarea" name="message" placeholder="Votre message"></textarea>
    <span class="focus-Nous_contacter"></span>
    </div>
    <div class="Bloc_Nous_contacter_bouton">
        <button class="Nous_contacter_bouton">
            <span>
                <i aria-hidden="true"></i>
                    Envoyer
            </span>
        </button>
    </div>
</form>