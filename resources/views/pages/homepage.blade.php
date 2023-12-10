<x-app-layout>
    <section id="hero">
        <div class="container">
            <div class="left-content">
                <h1>Find the best remote developer jobs</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus pulvinar lacus, tempor ultricies magna venenatis sit amet. Quisque id lacus feugiat leo efficitur imperdiet in nec est. Proin congue mi in facilisis tempus. Praesent metus ligula, mattis in tortor condimentum, pellentesque facilisis justo.</p>

                <form>
                    <div class="search-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg>
                        <input id="search-input" name="search" placeholder="I am looking for" type="text" />
                        <button type="submit">Search Jobs</button>
                    </div>
                </form>
            </div>
            <div class="right-content">
            <img src="{{ url('images/hero-img.png') }}" alt="" />
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="left-content">
                <img src="{{ url('images/about-img.jpg') }}" alt="" />
            </div>
            <div class="right-content">
                <h2>Find the best remote developer jobs</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus pulvinar lacus, tempor ultricies magna venenatis sit amet. Quisque id lacus feugiat leo efficitur imperdiet in nec est. Proin congue mi in facilisis tempus. Praesent metus ligula, mattis in tortor condimentum, pellentesque facilisis justo.</p>

                <ul class="list">
                    <li>List item 1</li>
                    <li>List item 2</li>
                    <li>List item 3</li>
                </ul>

                <a class="button primary" href="#">About Us</a>
            </div>
        </div>
    </section>
</x-app-layout>