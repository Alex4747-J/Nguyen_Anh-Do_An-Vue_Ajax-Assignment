export function lightbox() {
  console.log("JS file connected");

  const lightBox = document.querySelector("#lightbox");
  const links = document.querySelectorAll("a[data-agent-index]");
  const content = document.querySelector("#lightbox article");

  let agents = [
    {
      name: "Reyna",
      realname: "Zyanya Mondragón",
      bio: "Zyanya Mondragón is a Radiant from Mexico with the power to absorb life energy from the souls of people that she kills. After being affected by a disastrous event involving machines, Mondragón has a strong dislike for technology and humanity, believing herself and her fellow radiants to be the true future for Alpha Earth. Before her time as a VALORANT Protocol agent, she set up the Sanctuary to help people escape from Kingdom and heal, establishing a community there and becoming their protector and avenger.",
      avatar: "Reyna_artwork.webp",
    },
    {
      name: "Neon",
      realname: "Tala Nicole Dimaapi Valdez",
      bio: "Raised in Manila, Philippines, Tala Nicole Dimaapi Valdez is a radiant empowered by her bioelectricity which has enlaced itself with Earth's radianite mesh, the layer that separates the realities of Alpha Earth and Omega Earth. A young but former veteran at K-SEC, she was recruited by the VALORANT Protocol as part of their Omega Project, specifically to utilize her electric abilities as they attempted to power an Alpha-Omega teleporter. Accepting a position there as their nineteenth agent, 'Neon', Valdez left her home to join the Protocol and helped them to establish a stable connection to finally allow the VP to cross over to Omega Earth.",
      avatar: "Neon_artwork.webp",
    },
    {
      name: "ISO",
      realname: "Li Zhao Yu",
      bio: "Chinese hitman Li Zhao Yu is a radiant with the ability to transmute ambient, intangible radianite energy into solid, durable constructs. A former assassin for the Scions of Hourglass, Li gained a fearsome reputation for his high effectiveness. Though it was said that anyone who would go up against him would disappear for good, rumors still spread beyond about the 'Dead Lilac', a bulletproof wizard who could take out entire squads with one round and condemn targets to their fate in a flash of purple.",
      avatar: "Iso_artwork.webp",
    },
    {
      name: "Chamber",
      realname: "Vincent Fabron",
      bio: "The Frenchman Vincent Fabron lives his life in search of one necessary goal, willing to sacrifice anything that gets in his way of achieving it. He has spent much of his time involved with combat and weapons, having worked for the French military before becoming a PMC marksman and then a weapons designer for Kingdom Defense. His employment at Kingdom was only a stepping stone for him though, as by this point he was already set on his path in pursuit of his sacred truth.",
      avatar: "Chamber_artwork.webp",
    },
    {
      name: "Killjoy",
      realname: "Klara Böhringer",
      bio: "Klara Böhringer is an inventor from Germany who was born to one parent with Germanic ancestry. A nominee for the Distinguished Inventor award, Böhringer became the lead for Kingdom's R&D department at the age of 18. Incredibly successful, she had many breakthroughs during her time at Kingdom with several of her creations and innovations.",
      avatar: "Killjoy_artwork.webp",
    },
    {
      name: "Sage",
      realname: "Wei Ling Ying",
      bio: "The radiant monk is the VALORANT Protocol's seventh agent, 'Sage'. A natural leader, she was able to work her way quickly up the ranks, taking the lead on its radiant training program and interacting with multiple new radiants upon recruitment. Sage's own radiance gives her a pivotal role in the organization, making her able to resurrect the dead. Along with the rest of her abilities that she channels through orbs of pure, crystallized radianite to heal her fellow agents and keep enemies at bay, Sage uses her powers to keep the team alive and keep the fight going, her primary responsibility to the Protocol. But such incredible powers have limits, limits that in all her years of service Sage has been pushing well past. As these limits now begin to manifest on her body, Sage has to confront the cost of this burden she has so willingly shouldered for so long and find out whether she can truly bear it, for the debt is coming due.",
      avatar: "Sage_artwork.webp",
    },
    {
      name: "Fade",
      realname: "Hazal Eyletmez",
      bio: "A Radiant from Türkiye, Hazal Eyletmez searches for a person of importance to her after he was 'taken from her'. Using her ability to see nightmare-visions, her interpretations initially led her to suspect that he had been kidnapped by a secret organization she found to be the VALORANT Protocol. Eyletmez decided to contact the Protocol under an anonymous mark, threatening to expose the organization if she found out they were responsible for the kidnapping. When they appeared to only have interest in tracking her down rather than take her seriously, she then contacted each agent personally with a dossier about them to show how much she knew about VALORANT's people and what she could expose to the public if they had no interest in proving their innocence.",
      avatar: "Fade_artwork.webp",
    },
    {
      name: "Gekko",
      realname: "Mateo Armendáriz De la Fuente",
      bio: "Born and raised in Los Angeles, California, Mateo Armendáriz De la Fuente, call-sign 'Gekko', is VALORANT's twenty-second recruit and the owner of Dizzy, Mosh, Thrash, and Wingman, a crew of four creatures known as radivores with the ability to transform from their primary globule state into mimicked animalistic forms. Previously property of K-SEC, these radivores now live with Gekko, often traveling with him wherever he goes within their small carrier that Gekko wears as a sash, from which they'll emerge and take form at a moment's notice to assist him.",
      avatar: "Gekko_artwork.webp",
    },
    {
      name: "Skye",
      realname: "Kirra Foster",
      bio: "A Radiant from Nimbin, Australia, Kirra Foster spent years fighting against Kingdom Corporation's ventures in Eastern Australia. Resisting from Sawn Rocks to Kangaroo Valley, her efforts against Kingdom earned her the title of the 'Great Reclaimer'. Later approached by the VALORANT Protocol to become an agent, Foster was initially unsure of joining as she didn't want to give up her fight against Kingdom and leave her homeland unprotected. However, when Sage decided to contact and direct her to a massive rift in the sky near her home, telling her there were many more like that one across the world, Kirra realized that the fight was bigger than just her home territory. Finally answering the call, she now serves as the Protocol's fourteenth agent, 'Skye'.",
      avatar: "Skye_artwork.webp",
    },
    {
      name: "Viper",
      realname: "Sabine Callas",
      bio: "American chemist Sabine Callas was a pivotal figure during the modern rediscovery of radianite. A distinguished scientist working at Kingdom Corporation, she had been one of the first to investigate the substance when the organization came across it. However, news of what Callas and Kingdom were about to uncover reached the Scions of Hourglass, an organization that already secretly knew about radianite and didn't want its existence to become public knowledge again to Alpha. Hourglass proceeded to send their most talented asset, the assassin 'Ghost', to kill Callas. On the day of the attempted assassination however while Callas was working in her lab, she was able to defend herself, with Ghost being hit in the face by a vial of chemicals she had been holding before he had then ended up being trapped in a test chamber that Callas proceeded to activate while he was still inside..",
      avatar: "Viper_artwork.webp",
    },
    {
      name: "Omen",
      realname: "unknow",
      bio: "For many years the phantom radiant Omen had no memory of his past and how he came to be in his current state. Firstly working alongside Dr. Sabine Callas (one of his only apparent links to who he used to be) at Kingdom Corporation, he would then go on join her in the founding of the VALORANT Protocol. During his time as a secret agent, Omen was driven by his search to discover who he previously was. Without answers he was unable to find peace, his predicament being only a nightmare for him to live in.",
      avatar: "Omen_artwork.webp",
    },
    {
      name: "Clove",
      realname: "Ollie Baird",
      bio: "The young Scottish VALORANT agent Clove possesses powers unprecedented among even their fellow radiants - the power over the essences of life and immortality. Each death instead brings them to a whole new world, a junction between the realms of the living and the dead, one that Clove will journey through on their way to return to life and resurrect themselves. But such abilities are unlikely to be a blessing forever, and Clove themselves finds they can never spend too long in the junction beyond life as the longer they spend there, the harder it is to return.",
      avatar: "Clove_artwork.webp",
    },
  ];

  function fillContent(event) {
    // event.preventDefault();
    let agentIndex = this.dataset.agentIndex;
    let agentIndex = event.currentTarget.dataset.agentIndex;
    let agent = agents[agentIndex];
    //console.log(this.dataset.heroIndex);
    content.innerHTML = "";

    let agentName = document.createElement("h3");
    agentName.textContent = agent.name;
    agentName.classList.add("lb_heading");

    let agentRealName = document.createElement("h4");
    agentRealName.textContent = agent.realname;
    agentRealName.classList.add("lb_real");

    let agentBio = document.createElement("p");
    agentBio.textContent = agent.bio;
    agentBio.classList.add("lb_text");

    content.appendChild(agentName);
    content.appendChild(agentRealName);
    content.appendChild(agentBio);


    if (agent.name === "Neon" && agent.avatar) {
      lightBox.style.backgroundImage = `url('frontend/images/${agent.avatar}')`;
      lightBox.style.backgroundSize = "55vh";
      lightBox.style.backgroundPosition = "40px bottom";
    } else {
      lightBox.style.backgroundImage =
        "url('frontend/images/Reyna_artwork.webp')";
      lightBox.style.backgroundSize = "55vh";
      lightBox.style.backgroundPosition = "40px bottom";
    }
  }
  
  links.forEach((link) => link.addEventListener("click", fillContent));
}