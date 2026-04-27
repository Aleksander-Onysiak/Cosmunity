<x-partials.layout>
    <header>

    </header>
    <section class="section">
        <div class="profile_banner">
            <h1>Aleksander</h1>
            <img src="../../images/cosplay.jpg.webp" alt="">

            <form action="">
                <input type="button" value="Modifier">
                <input type="button" value="Un boutton">
            </form>
        </div>
    </section>
    <section class="section section--data">

        <div class="section__header">
            <h2>Mes coordonnées</h2>
            <p>Voici les informations principales me concernant.</p>
        </div>

        <div class="data">
            <div class="data_item">
                <dt>Numéro de téléphone</dt>
                <dd>+32 47 121 32 47</dd>
            </div>

            <div class="data_item">
                <dt>Statut</dt>
                <dd>Cosplayer</dd>
            </div>

            <div class="data_item">
                <dt>Anniversaire</dt>
                <dd>03-06-1998</dd>
            </div>

            <div class="data_item">
                <dt>Genre</dt>
                <dd>Homme</dd>
            </div>

            <div class="data_item">
                <dt>Titre</dt>
                <dd>Coordonnée</dd>
            </div>

            <div class="data_item">
                <dt>Titre</dt>
                <dd>Coordonnée</dd>
            </div>
        </div>

    </section>
    <section class="section">
        <div>
            <img src="" alt="">
            <h2>Photos</h2>
            <p>Un texte</p>
        </div>
        <div>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </section>
    <section class="section">
        <div>
            <img src="" alt="">
            <h2>Groupes</h2>
            <p></p>
        </div>
        <div class="flex">

        <x-articles.group></x-articles.group>
        <x-articles.group></x-articles.group>
        <x-articles.group></x-articles.group>
        <x-articles.group></x-articles.group>

        </div>
    </section>
    <section class="section">
        <div>
            <img src="" alt="">
            <h2>Amis</h2>
            <p>Personnes que tu peux connaître</p>
        </div>
        <div class="flex">
            <x-articles.friends.friend></x-articles.friends.friend>
            <x-articles.friends.friend></x-articles.friends.friend>
            <x-articles.friends.friend></x-articles.friends.friend>
            <x-articles.friends.friend></x-articles.friends.friend>
            <x-articles.friends.friend></x-articles.friends.friend>
            <x-articles.friends.friend></x-articles.friends.friend>
            <x-articles.friends.friend></x-articles.friends.friend>
            <x-articles.friends.friend></x-articles.friends.friend>
            <x-articles.friends.friend></x-articles.friends.friend>
        </div>
    </section>
    <section class="section">
        <div>
            <img src="" alt="">
            <h2>Events</h2>
            <p>Events qui pourraient vous intéresser</p>
        </div>
        <div class="flex">
            <x-articles.event>
            </x-articles.event>

            <x-articles.event>
            </x-articles.event>

            <x-articles.event>
            </x-articles.event>

            <x-articles.event>
            </x-articles.event>

            <x-articles.event>
            </x-articles.event>

            <x-articles.event>
            </x-articles.event>
        </div>
    </section>
</x-partials.layout>
