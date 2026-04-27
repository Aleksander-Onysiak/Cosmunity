<x-partials.layout>
    <header>
        <div class="section">
            <h2>Créer un nouveau groupe</h2>
        </div>
    </header>
    <main>
        <section class="form">
            <form action="">
                <fieldset>
                    <div class="field">
                        <label for="">Titre</label>
                        <input type="text">
                    </div>

                    <div class="field">
                        <label for="">Description</label>
                        <input type="text">
                    </div>

                    <div class="field">
                        <label for="">Photo</label>
                        <input type="file">
                    </div>
                </fieldset>
                <fieldset>
                    <label for="">Privé</label>
                    <input type="radio" name="" id="">

                    <label for="">Public</label>
                    <input type="radio" name="" id="">
                </fieldset>
                <fieldset>
                    <label for=""><x-articles.friends.friend></x-articles.friends.friend></label>
                    <input type="checkbox" name="" id="">
                </fieldset>
                <button type="submit">Créer</button>
            </form>
        </section>
    </main>
</x-partials.layout>
