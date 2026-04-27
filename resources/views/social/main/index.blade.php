<x-partials.layout>
    <header>

    </header>
    <section class="section">
        <div>
            <img src="" alt="">
            <h2>Nouveau post</h2>
        </div>
        <form action="">
            <input type="text" name="" id="">
        </form>
        <div>
            <button type="submit">Publier</button>
            <button type="submit">Photo</button>
            <button type="submit">Video</button>
            <button type="submit">Event</button>
            <button type="submit">Partager</button>
        </div>
    </section>
    <section class="section">
        <div>
            <img src="" alt="">
            <h2>Gary Rebufatti</h2>
            <p>
                <span> Shooting</span> / <span>Cosplay</span> / <span>Thème</span>
            </p>
        </div>
        <div>
            <p>
                Hello ! J’organise une sortie photo à la Citdelle de Namur sur le thème de Attack on Titan (SNK). 5
                places
                disponbiles
            </p>
        </div>
        <div>
            <img src="" alt="">
        </div>
        <div>
            <dt>Données</dt>
            <dd><span>23</span>likes</dd>
            <dd><span>45</span>commentaires</dd>
        </div>
        <button type="submit">Partager</button>
        <article>
            <div>
                <img src="" alt="">
                <h3>Aleksander</h3>
            </div>
            <labe>Mon commentaire</labe>
            <input type="text" name="" id="">
            <button type="submit">Commenter</button>
        </article>
        <article>
            <div>
                <img src="" alt="">
                <h3>Gary</h3>
            </div>
            <div>
                <p>
                    Je viens du coté de Liège et je peux proposer du covoiturage pour 3 personnes!
                </p>
            </div>
            <button type="submit">Partager</button>
            <button type="submit">Répondre</button>
        </article>
    </section>
    </body>
    <aside class="section">
        <h2>Sidebar</h2>
        <section>
            <h3>Suggestions d'amis</h3>

            <div>
                <x-articles.friends.friend_request></x-articles.friends.friend_request>
                <x-articles.friends.friend_request></x-articles.friends.friend_request>
                <x-articles.friends.friend_request></x-articles.friends.friend_request>
                <x-articles.friends.friend_request></x-articles.friends.friend_request>
                <x-articles.friends.friend_request></x-articles.friends.friend_request>
                <x-articles.friends.friend_request></x-articles.friends.friend_request>
            </div>
        </section>
        <section class="section">
            <h3>Nouveautés:</h3>
            <div>
                <x-articles.news_ad></x-articles.news_ad>
                <x-articles.news_ad></x-articles.news_ad>
                <x-articles.news_ad></x-articles.news_ad>
                <x-articles.news_ad></x-articles.news_ad>
                <x-articles.news_ad></x-articles.news_ad>
                <x-articles.news_ad></x-articles.news_ad>
                <x-articles.news_ad></x-articles.news_ad>
            </div>
            <button type="submit"><strong>Voir toutes les nouveautés</strong></button>
        </section>
    </aside>
</x-partials.layout>
