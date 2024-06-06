<h1>Formulaire de contact</h1>
<main>
    <section class="formulaire">
        <form id="survey-form">
            <div class="form-group">
                <label id="name-label" for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre Nom" required />
            </div>

            <div class="form-group">
                <label id="firstname-label" for="firstname">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Votre Prénom" required />
            </div>

            <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="adresse@email.fr" required />
                <div class="form-group" id="title-comments">
                    <p>Message</p>
                    <textarea id="comments" class="input-textarea" name="comment" placeholder="Veuillez insérer un message..." required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" id="submit" class="submit-button">
                        Envoyer
                    </button>
                </div>
        </form>
    </section>
    <section>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2636.893663157867!2d2.569291315690447!3d48.63101687926589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5e3a008e29283%3A0x2951926768f8937!2s240%20Rue%20de%20la%20Motte%2C%2077550%20Moissy-Cramayel!5e0!3m2!1sfr!2sfr!4v1674142672403!5m2!1sfr!2sfr" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="localisation">
            <p class="carte"><strong>Lieu : </strong><?= $contact['nom'] ?> , <?= $contact['bâtiment'] ?></p>
            <p class="carte"><strong>Adresse : </strong><?= $contact['adresse'] ?> </p>
            <p class="carte"><?= $contact['code_postal'] ?> <?= $contact['ville'] ?> </p>


        </div>
    </section>