<section class="section">
  <div class="container">
    <div class="content">
      <h2>Titel</h2>
    </div>
    <div class="columns">
      <div class="column is-half">
        <form id="send">
          <div class="field">
            <div class="control">
              <input id="send_name" class="input" type="text" placeholder="Name" required>
            </div>
          </div>
          <div class="field">
            <div class="control">
              <input id="send_email" class="input" type="email" placeholder="Email address" required>
            </div>
          </div>
          <div class="field">
            <div class="control">
              <input id="send_phone" class="input" type="tel" placeholder="Phone number" required>
            </div>
          </div>
          <div class="field">
            <div class="control">
              <textarea id="send_message" class="textarea" placeholder="Message" minlength="10" required></textarea>
            </div>
          </div>
          <div class="field">
            <div class="control">
              <button id="submit" class="default button is-fullwidth">Versturen</button>
            </div>
          </div>
        </form>
        <div id="success">
          <div class="content has-text-centered">
            <h3 id="result" class="title"></h3>
          </div>
        </div>
        <div id="failure">
          <div class="content has-text-centered">
            <h3 class="title">Versturen mislukt...</h3>
          </div>
        </div>
      </div>
      <div class="column is-half">
        <div class="map-responsive">
          <iframe src="https://maps.google.com/maps?width=100%&height=600&hl=nl&q=Oosterhiemweg%201%2C%209161%20CZ%20Hollum+(Vakantiewoningaanhetwater)&ie=UTF8&t=h&z=18&iwloc=B&output=embed"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
