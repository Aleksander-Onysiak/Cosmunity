<x-partials.layout>
    <header>
        <div class="section">
            <h2>Créer un nouvel évent</h2>
            <p>Trouvez un evenement autour de chez vous et rencontrez de nouvelles oersonnes</p>
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
                       <label for="">Date de début</label>
                       <input type="date">
                   </div>

                    <div class="field">
                        <label for="">Date de fin</label>
                        <input type="date">
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

                <button type="submit">Créer</button>
            </form>
        </section>
    </main>
    <x-partials.footer></x-partials.footer>
</x-partials.layout>
