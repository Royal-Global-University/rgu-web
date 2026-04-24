@extends('frontend.master')
@section('content')
    <!-- copy this inside the body  -->
  <style>
    /* Mobile (Up to 1024px) - Controls visibility */
    @media only screen and (max-width: 1024px) {
      .faculty-bio-desktop-display {
        display: none !important;
      }

      .faculty-bio-mobile-display {
        display: block !important;
      }
    }

    /* Desktop (1025px+) - Controls visibility */
    @media only screen and (min-width: 1025px) {
      .faculty-bio-desktop-display {
        display: block !important;
      }

      .faculty-bio-mobile-display {
        display: none !important;
      }
    }
  </style>

  <style>
    /* 1. White Section Spacing Logic */
    .faculty-bio-white-section {
      background-color: #fff;
      position: relative;
    }

    @media (min-width: 1025px) {
      .faculty-bio-white-section {
        height: 42vh;
        overflow: visible;
      }

      .faculty-bio-img {
        margin-top: 100px;
        width: 480px;
        margin-left: 45px;
      }

      .faculty-bio-name-pad {
        padding-top: 3rem;
      }
    }

    @media (max-width: 1024px) {
      .faculty-bio-white-section {
        height: 40vh;
        padding-top: 90px;
      }

      .faculty-bio-img {
        margin-top: 70px;
        width: 380px;
      }
    }

    /* 2. Image Border Style (Common) */
    .faculty-bio-img {
      border: 1px solid #27467A;
      max-width: 100%;
      /* Safety for very small screens */
    }

    /* 3. Font Styles (Responsive) */
    .faculty-bio-main-name {
      font-family: 'Times New Roman', Times, serif;
      font-weight: 700;
      color: #FF9A1E;
    }

    .faculty-bio-designation {
      font-family: 'Times New Roman', Times, serif;
      font-weight: 700;
      position: relative;
      display: inline-block;
    }

    /* Desktop Font Sizes */
    @media (min-width: 1025px) {
      .faculty-bio-main-name {
        font-size: 45px;
      }

      .faculty-bio-designation {
        font-size: 26px;
        color: #27467A;
      }
    }

    /* Mobile Font Sizes */
    @media (max-width: 1024px) {
      .faculty-bio-main-name {
        font-size: 35px;
      }

      .faculty-bio-designation {
        font-size: 20px;
        color: #fff;
      }

      /* White title on blue bg */
    }

    /* 4. Underline Style */
    .faculty-bio-underline-effect::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -10px;
      width: 300px;
      height: 4px;
      background-color: #FF9A1E;
    }

    /* 5. List Styles (Blue Section) */
    .faculty-bio-blue-section {
      background-color: #27467A;
      padding-bottom: 50px;
    }

    @media (max-width: 1024px) {
      .faculty-bio-blue-section {
        padding-top: 190px;
      }
    }

    .faculty-bio-sub-heading {
      font-family: 'Times New Roman', Times, serif;
      font-size: 22px;
      font-weight: 700;
      font-style: italic;
      color: #FF9A1E;
      margin-top: 1.5rem;
      margin-bottom: 1rem;
    }

    .faculty-bio-info-list {
      list-style: none;
      padding-left: 0;
      color: #fff;
      font-family: 'Times New Roman', Times, serif;
      font-size: 18px;
    }

    .faculty-bio-info-list li {
      display: flex;
      align-items: flex-start;
      line-height: 1.8;
      margin-bottom: 8px;
    }

    .faculty-bio-info-list i {
      font-size: 8px;
      margin-right: 10px;
      margin-top: 12px;
      flex-shrink: 0;
    }
  </style>

  <section>

    <div class="mobile">
      @include('frontend/components/mobileheader')
    </div>
    <div class="website">
      @include('frontend/components/aheader')
    </div>

    <div class="faculty-bio-white-section">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 text-center">
            <div class="text-center">
              <img class="faculty-bio-img" style="height: 400px; width: 400px;" src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Krishna-Barua-RSL.png"
                alt="">
            </div>
          </div>

          <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
            <div class="faculty-bio-name-pad">
              <h2 class="faculty-bio-main-name mb-3 pt-5">
                Prof. (Dr.) Krishna Barua
              </h2>
              <h2 class="faculty-bio-designation mb-5 faculty-bio-underline-effect">
                Senior Professor
              </h2>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="faculty-bio-blue-section">
      <div class="container">
        <div class="row">

          <div class="col-lg-5"></div>

          <div class="col-lg-7 pt-4 pb-4">

            <div class="faculty-bio-mobile-display">
              <h2 class="faculty-bio-main-name fw-bold pt-4">
               Prof. (Dr.) Krishna Barua
              </h2>
              <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                Senior Professor
              </h2>
            </div>

            <h2 class="faculty-bio-sub-heading">About:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Dr. Krishna Barua retired as Professor (English) in the Dept. of Humanities &amp; Social Sciences at the Indian Institute of Technology Guwahati, Assam, India. Her Ph.D. on Patrick White (1986) was one of the pioneering works on Commonwealth Literature. She is currently serving as Senior Professor, RSL, RGU (from 2017 till present).</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Qualifications:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Ph.D., Gauhati University, Assam, India, 1986</span></li>
              <li><i class="fa fa-circle"></i> <span>M.A. English, Gauhati University, 1970</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Teaching Experience:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>45 years</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Experience:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Retired Professor in English, Indian Institute of Technology, Guwahati (Retired on 29th Feb. 2016)</span></li>
              <li><i class="fa fa-circle"></i> <span>Senior Professor, RSL, RGU (from 2017 till present)</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Title of Ph.D. Thesis:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span><em>The Novels Of Patrick White: A Critical Study of Themes &amp; Variations.</em> Patrick White (1912-1990), the Australian writer who was awarded the Nobel Prize for Literature in 1973, wide intellectual horizon and sheer imaginative alertness combine to make him the first truly international English novelist of indisputably major rank.</span></li>
            </ul>



            <h2 class="faculty-bio-sub-heading">Ph.D. Research Students:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>Mrs Farhana Parveen, Research Scholar in English, IIT Guwahati from August, 2000-2005 (Title of research: <em>Situating The Self in the Fiction and selected Non-Fiction of John Robert Fowles</em>). Degree awarded on May, 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Mr Rajiv Doley, Research Scholar in English, IIT Guwahati from August, 2001. (Title of research: <em>Inter-lingual Code-Switching as a Sociolinguistic Phenomenon amongst the Misings of the Brahmaputra Valley: A Study</em>). Degree awarded on August, 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Mrs Malini Nair, Research Scholar in English, IIT Guwahati from July, 2003. (Title of research: <em>The Stock British Comic Character: in selected novels of P.G. Wodehouse</em>). Degree awarded on August, 2009.</span></li>
            <li><i class="fa fa-circle"></i> <span>Mr Anurag Bhattacharyya, Research Scholar in English, IIT Guwahati from January, 2007. (Title of research: <em>Places, Landscapes and Lives: Towards an Ecocritical Reading of Gao Xingjian's fiction</em>). Degree awarded on August, 2012.</span></li>
            <li><i class="fa fa-circle"></i> <span>Biswajit Kalita, Research Scholar, Annamalai University. (Title of research: <em>The Autobiographical elements in Charles Dickens, David Copperfield and Great Expectations</em>). Degree awarded on 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Ms Rosy Saikia, Research Scholar in English, IIT Guwahati from January, 2010. (Title: <em>Word and Image: The Aesthetics of Representation in Rainer Maria Rilke's Selected Works</em>).</span></li>
            <li><i class="fa fa-circle"></i> <span>Md. Sohail Ahmed (Jointly with Dr. Liza Das), Research Scholar in English, IIT Guwahati. (Title: <em>Names and Naming as Metaphors of Diasporic Identity in The Namesake</em>). Degree awarded on 2012.</span></li>
            <li><i class="fa fa-circle"></i> <span>Dhrubajyoti Malakar, Research Scholar in English, IIT Guwahati from January, 2010-2016. (Title: <em>Riverscapes, Seasons and Love: a Study of Romanticism in Bhupen Hazarika's Lyrics</em>).</span></li>
            <li><i class="fa fa-circle"></i> <span>Biswajit Kalita, Research Scholar in English, IIT Guwahati from January, 2009. (Title: <em>Performing the Rama-Saga. Traditions and Variants of the Ramayana Performance in Assam</em>).</span></li>
            <li><i class="fa fa-circle"></i> <span>Pulak Talukdar, Research Scholar in English, IIT Guwahati from January, 2012. (Title: <em>Shifting Chronotopes: A study in Dr. Bhabendra Nath Saikia's film adaptations</em>).</span></li>
            <li><i class="fa fa-circle"></i> <span>Asenla Yanger – <em>Melieu, Memory, Mysticism: A Comparative Study of Naturalism and Deep Ecology in the selected Novels of John Steinbeck and Easterine Kire</em>. 2024.</span></li>
            <li><i class="fa fa-circle"></i> <span>Rashmi Rekha Barman – <em>Writing from Memory and History: A Psychosocial Study on Abdulrazak Gurnah's Fiction</em>, English Dept, RSL, 2025.</span></li>
            <li><i class="fa fa-circle"></i> <span>Dimpy Bania – <em>Self, Identity and Heroism: A Psycho-Philosophical Study of Karna in the Mahabharata</em>. 2025.</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Areas of Ongoing Research:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Aesthetics, Ecocriticism, Performance Studies, Commonwealth Literature, Comparative Literature, Film Adaptation, Cultural Studies</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Aesthetics and Literature:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>The core of reality: The Mandala as a leitmotif in Patrick White's novels. <em>Fact and Fiction: Readings in Australian Literature.</em> Amit Sarwal (Ed.) New Delhi: Authorspress. 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>The Sri Yantra: a Symbol of Cosmic Consciousness, Sakti worship in India, <em>Systems of religion, History of Indian Sciences, Philosophy &amp; culture,</em> Prof. D.P. Chattopadhyaya (ed). Centre for Studies in Civilization, New Delhi.</span></li>
            <li><i class="fa fa-circle"></i> <span>Bhakti as the Essence of Peace: Srimanta Sankaradeva's aesthetics of Prayer. <em>Peace in Dialogue: Reflections on North East India,</em> Indian Council of Social Science Research, Akanshya Publishers, New Delhi, November 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Rabindranath Tagore and Ananda K. Coomaraswamy: Towards an Indian interpretation on Art, Beauty and Man. <em>Aestheticism: dehumanizing or Rehumanizing Art, the Artist, and the Artistic Receptor?</em> ACLA (American Comparative Literature Association) 2006 Conference, March 23-26, 2006, Princeton, USA.</span></li>
            <li><i class="fa fa-circle"></i> <span>Nowness: a restructuring of mandalic consciousness in Patrick White's novels. <em>Convergences and Divergences.</em> IASA Third International Conference of Indian Association for the Study of Australia, organized by Australia-India Council and Australian Education International, Pune, 9-11 January 2006.</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Ecocriticism:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>Ecological interdependence: Cultural Ecology in the Vedic and Doaist traditions. <em>Ecological Criticism: Applications and Possibilities</em> Murali Sivaramakrishnan. (Ed) AuthorsPress, New Delhi (in print).</span></li>
            <li><i class="fa fa-circle"></i> <span>To garden the Wilderness: John Fowles's The Tree, <em>Literature, Writing, and the Natural World,</em> English Association of Pennsylvania State Universities (EAPSU), Mansfield University of Pennsylvania. Vol 4, Fall 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Dialogues: Jiddu Krishnamurti and John Fowles, <em>Nature and Human Nature: Literature, Ecology, Meaning.</em> Murali Sivaramakrishnan Ed. Prestige Books New Delhi, 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Space and place: in Kiran Desai's The Inheritance of Loss. <em>Postcolonial Actualities: Past and Present,</em> UT Austin 16-17 October 2009.</span></li>
            <li><i class="fa fa-circle"></i> <span>Place, Landscape and self: in Gao Xingjian's Soul Mountain.; <em>Pacific Ancient and Modern Language Association.</em> November 6-7, 2009.</span></li>
            <li><i class="fa fa-circle"></i> <span>Space and Landscape: in Raja Rao's The Serpent and the Rope and Gao Xingjian's Soul Mountain.; <em>Island Time: The Fate of Place in a Wired, Warming World,</em> Association for the Study of Literature and Environment. June 3-6, 2009, University of Victoria, British Columbia, Canada.</span></li>
            <li><i class="fa fa-circle"></i> <span>Topographies of place: Towards a reading of Australian ecocritics; Fifth Biennial International Conference of the Indian Association for the Study of Australia (IASA), to be held in Goa on 18-21 January 2010.</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Comparative Studies:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>Jane Austen in Patrick White; <em>Jane Austen and the comic Tradition.</em> Laura Carrol (Ed). La Trobe University Press, Melbourne, Australia 2009.</span></li>
            <li><i class="fa fa-circle"></i> <span>Reconstructions of the Truth in Mahatma Gandhi's An Autobiography: The Story of My Experiments with Truth and Orhan Pamuk's Istanbul: Memories of a City.; <em>Truth, Interpretation and Language.</em> University of Mumbai and the Indian Council of Philosophical Research, New Delhi 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>The Experiments of Truth: restructuring of Gandhian experiences in Naipaul's Half a life and Magic Seeds.; <em>The V.S. Naipaul Special Issue, The South Asian Review,</em> 2006 University of Pittsburgh.</span></li>
            <li><i class="fa fa-circle"></i> <span>The face: a study of the other in Patrick White's The Solid Mandala and John Steinbeck's Of Mice and Men. <em>International conference on John Steinbeck,</em> The New Steinbeck Society of America, Brigham Young University-Idaho, Rexburg March 22-25, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>The Androgene: The ambiguity of existence in Patrick White's The Solid Mandala and The Twyborn Affair; <em>Consciousness, Literature and the Arts,</em> Daniel meyer-Dinkgrafe Ed., University of Wales, December 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>John Steinbeck and Patrick White: A comparative study. <em>The New Literary Miscellany,</em> Sanjoy Saksena (ed). Allahbad, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>The sense and the nonsense: in Raja Rao's The Cat and Shakespeare and Patrick White's The Solid Mandala, <em>Journal of Dept of English,</em> Guwahati University, Vol V, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Cosmic and Acosmic: a redefinition of Being and Time in Raja Rao's The Serpent and the Rope and Patrick White's Voss. Invited Lecture, Program in Comparative literature, English Department, University of Texas at Austin, November 1, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Negotiating cultural boundaries: discursive strategies in Raja Rao's The Serpent and the Rope and V.S. Naipaul's Half a life,; <em>Confluences XXIV. Border lines and Border lands,</em> Corinne Alexander Garner ed. Centre. Universite Paris X Nanterre. June 2004.</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Cultural Studies:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>Robert Ross's Australia: departure, passage and arrival. <em>Culture and Identity: Re-Imagining Australia and India IASA-IV Biennial International Conference,</em> Indian Association for the Study of Australia Burdwan University, Kolkatta, 22-24 January 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>John Fowles: Ebony Towers; <em>The Facts on File Companion to the British Short Story.</em> ed. Dr Andrew Maunder New York: Facts on File, March 2, 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Sankardeva and the cultural Renaissance in Assam. <em>The Encyclopedia of the Middle East and South Asia.</em> ed. Gordon D. Newby, Department of Middle Eastern and South Asian Studies, Emory University, published by M.E. Sharpe, 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>The oceanic circle: Mahatma Gandhi and his Ram rajya - <em>Demanding the Impossible: Utopias3 Conference,</em> Centre for Comparative Literature and Cultural Studies, Monash University, Victoria, Australia, 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Mapping the territories: Mishi Saran's Chasing the Monks Shadow. A Journey in the Footsteps of Xuanxang. <em>Tenth International Conference Thinking Territory: Affect and Attachment towards Land in South Asia,</em> Forum on Contemporary Theory, Goa 16-19 December 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Identity as Being: The Tai Phakes of Assam. <em>Northeast India and Its Transnational Neighbourhood,</em> Dept of Humanities &amp; Social studies, IIT Guwahati, with Leiden University, the School of Oriental and African Studies of the University of London, and the University of Amsterdam, at IIT Guwahati 17th January - 18th January, 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Life in fiction, and fiction in life: A reading of Syed Abdul Malik's Rup Tirthar Jatri., <em>National Conference on Life writing and the North East,</em> Tezpur Central University, 22nd Feb-24th Feb, 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Never was there a time: When I did not Exist? the theological and empirical approaches to Time, <em>Ancient Indian Historiography,</em> Jadavpur University, Dept of Comparative Literature, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Vedic Modernism in Modern India- the urgent necessity of its resurgence,; <em>Proceedings of World Congress on Vedic Sciences,</em> Vijnana Bharati, Hebbal, Bangalore, &amp; Indian council of Philosophical Research, Bangalore, India, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>I shall not unpack: the rhetorics of hiding in V.S. Naipaul's Half a Life,; <em>The Atlantic Critical Review,</em> Quarterly, Vol 3, NO:2, April-June, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>The dancing prankster or the enlightened seer? in Raja Rao's The Cat and Shakespeare and Patrick White's The Solid Mandala,; <em>Modern Practical Criticism (from Modernism to Stylistics)</em> Vol 1. ed by Prof N.Chandra, Authors Press: New Delhi, 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>The horizontal &amp; the vertical: Perspectives on Reading,; <em>Interpretation of Texts,</em> K.C.Baral, (ed.) Director, CIEFEL, Shillong, Pencraft International, New Delhi. 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>Wet, boiling, superficial: through the artist's eyes: cityscapes in Patrick Whites the Vivisector. <em>Urban Australia: The Urban experience in Australian Literature,</em> American Association of Australian Literary Studies Panel, The 2002 Modern Language Association international Convention, New York, 27-30 Dec; 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>The Essence as Totality: in Shakespeare's The Phoenix and the Turtle. <em>International conference on Shakespeare's Narrative Poems,</em> Royal Holloway, University of London, Surrey. June 2000.</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Classroom Teaching:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>How Truth is Invented: The Art &amp; Craft of Autobiography in a cybernetic classroom; <em>3rd International Conference on Education and Information Systems, Technologies and Applications (EISTA 2005)</em> and the International Conference on Cybernetics and Information Technologies, Systems and Applications (CITSA 2005), in Orlando, USA, July 14-17, 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Cultural Studies and the Engineer,; <em>Technology and the Literature and Writing Classrooms,</em> Special Session, The Midwest Modern Language Association, Palmer House Hilton, Chicago November 9-12, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Literary encounters in a cybernetic classroom: inside an English class at IIT Guwahati; <em>English: The Condition of the Subject,</em> International conference, Senate House, University of London, 17th July-19th July, 2003.</span></li>
            </ul>


            <h2 class="faculty-bio-sub-heading">Translation Studies:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>Dr Bhabendranath Saikia- Translation of selected short stories. United Publishers, Delhi (in print).</span></li>
            <li><i class="fa fa-circle"></i> <span>The Language of Enactment: of tension or synthesis in presentation: the rasa-dhvani or point of view: in translating Dr Bhabendra Nath Saikia's Deuka,; <em>Translation: Poetics &amp; Practice,</em> Anisur Rahman (ed.) Creative Books, New Delhi, 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>Encounters and Betrayals: Refiguring contesting selves in Dr. Bhabendranath Saikia's Deuka and Taranga.; <em>Journal of Literary Studies, An Annual review of Literary criticism and Culture</em> No:2. 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Waves, a translation of Dr Bhabendranath Saikia's short story Taranga, <em>Melange magazine, The Sentinel,</em> 14th November, 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Wings; (translation of Dr Bhabendranath Saikia's short story; Deuka; <em>Collected Short stories,</em> Katha, New Delhi, 2002).</span></li>
            </ul>


            <h2 class="faculty-bio-sub-heading">Ph.D. Theses Examined:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>External Examiner for PhD Thesis (written &amp; viva/voce) Arshiya Bawa Sethi entitled <em>Religion, State and Nation: Assam's Sattras and their Dance,</em> Department of Humanities and Social Sciences, Indian Institute of Technology Delhi. Degree awarded in 2013.</span></li>
            <li><i class="fa fa-circle"></i> <span>External Examiner for PhD Thesis (written &amp; viva/voce) of Mr. Ashis Gupta, Assistant Professor, Govt. College, Tripura for his thesis <em>Formulation and Application of Colour-Usage/Colour Response Analysis Theory on Canadian Prairie Poetry in Selected Poems of Robert Kroetsh and Dennis Cooley,</em> Department of English, Arunachal University, Rono Hills, Doimukh, Arunachal. Degree awarded on 24th Dec, 2001.</span></li>
            <li><i class="fa fa-circle"></i> <span>External Examiner for Ph.D. Thesis (written &amp; viva/voce) of Ms. Rupjyoti Bhattacharjee's Thesis <em>Voicing the self: A Study of Contemporary Indian Women Novelists,</em> Arunachal University, Rono Hills, Itanagar. Ph.D. degree awarded in 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>External Examiner for Ph.D. Thesis Tridhara Bardoloi, Department of English, Dibrugarh University. <em>Mapping the feminine landscape and self: An Ecological Reading of Select Fiction by Indian Women Writers,</em> 2024.</span></li>
            </ul>



            <h2 class="faculty-bio-sub-heading">Paper Publications in Journals National / International:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. A betweenness in the language of enactment: in Raja Rao's Kanthapura - Indian Fiction in English. <em>The Indian Review of World Literature in English,</em> IRWLE, VOL 7, NO: 2. July 2011.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Body: A Reading of the Androgyne in Patrick White's The Solid Mandala and The Twyborn Affair" <em>Patrick White Centenary International Conference Association For The Study Of Australasia In Asia.</em> Dept of English, University of Hyderabad, Hyderabad 5-7 November 2012.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The ubiquitous British Fool: Humour in Jane Austen and P.G. Wodehouse." in <em>I dearly love a laugh: Jane Austen and Comedy. IDIOM</em> Editors: Peter Lawrance and Margaret Saltau. The Victorian Association for the Teaching of English Volume 44, Number 1, 2008. Melbourne, Australia.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Robert Ross's Australia: departure, passage and arrival." <em>Culture and Identity: Re-Imagining Australia and India, Volume on IASA-IV Biennial International Conference,</em> Indian Association for the Study of Australia, 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Androgene: The ambiguity of existence in Patrick White's The Solid Mandala and The Twyborn Affair" <em>Consciousness, Literature and the Arts,</em> Daniel meyer-Dinkgrafe, Editor University of Wales Aberystwyth ISSN 1470-5648, Volume 7 Number 3, December 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "To garden the Wilderness: John Fowles's The Tree," <em>Literature, Writing, and the Natural World,</em> English Association of Pennsylvania State Universities (EAPSU), Mansfield University of Pennsylvania., ISBN 1548-1964. Vol 4, Fall 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Nowness: a restructuring of mandalic consciousness in Patrick White's novels." <em>Convergences and Divergences,</em> IASA Volume of Third International Conference of Indian Association for the Study of Australia (IASA) on Australia and India Pune: (9-11 January 2007).</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Literary Encounters in a cybernetic classroom" – <em>journal of Asia-wide IIT Alumni Event,</em> IIT Alumni Association Singapore, 26 Aug 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Experiments of Truth: restructuring of Gandhian experiences in Naipaul's Half a life and Magic Seeds." <em>The V.S. Naipaul Special Issue, The South Asian Review,</em> University of Pittsburgh, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Towards a more vibrant classroom: the necessity of change in framing and teaching English Courses in Higher Education." <em>Role of Higher Education for Social Change in India with Special Reference to North Eastern Region, Proceedings Volume,</em> Shillong College Golden Jubilee Celebration Committee, Shillong, July, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "cosmic and acosmic, a redefinition of Being and Time in Raja Rao's The Serpent and the Rope and Patrick White's Voss." <em>Conference volume, International Conference on Commonwealth Literature.</em> Dept of Humanities &amp; Social Sciences, Indian Institute of Technology Roorkee, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Encounters and Betrayals: refiguring contesting selves in Dr Bhabendranath Saikia's Deuka and Taranga." <em>Journal of Literary Studies, An Annual review of Literary criticism and Culture</em> No:2. 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "V.S. Naipaul's Half a Life," <em>The Atlantic Critical Review,</em> Quarterly, Vol 3, NO:3, July-September, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The sense and the nonsense: in Raja Rao's The Cat and Shakespeare and Patrick White's The Solid Mandala," <em>Journal of Dept of English,</em> Guwahati University, Vol V, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "I shall not unpack: the rhetorics of hiding in V.S. Naipaul's Half a Life," <em>The Atlantic Critical Review,</em> Quarterly, Vol 3, NO:2, April-June, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Never was there a time: When I did not Exist… the theological and empirical approaches to Time," <em>Ancient Indian Historiography,</em> Jadavpur University, Dept of Comparative Literature, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The patterning of plurality in Raja Rao's Kanthapura," <em>Problems &amp; Perspectives of Social Philosophy,</em> Vol 4., International Congress of Social Philosophy, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "From the black and white to the grey -- The Fuzzy World in Raja Rao's The Cat and Shakespeare," <em>Mind &amp; Consciousness: Various Approaches,</em> Micon 2002, Indian Institute of Technology, Kharagpur, Journal of Proceedings, Published by Indian Institute of Advanced Study, Shimla 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "V.S. Naipaul's Half A life" <em>Journal of literary Studies, an Annual review of Literary criticism and Culture,</em> No 1. 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Devi" <em>Religion &amp; Aesthetics,</em> BRPL journal, March, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Wings" (translation of Dr Bhabendranath Saikia's short story "Deuka", <em>Collected Short stories,</em> Katha, New Delhi, 2002).</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Essence as Totality: in Shakespeare's The Phoenix and the Turtle," <em>The Literary Half Yearly, Journal of Comparative Literature,</em> H.H. Anniah Gowda (ed.), Institute of Commonwealth and American Studies and English Language, Summer issue. Mysore, 1999.</span></li>
            </ul>


            <h2 class="faculty-bio-sub-heading">Books:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span>Krishna Barua, <em>Not I but The Wind</em>, Writers Workshop, Kolkata, Dec 2008.</span></li>
              <li><i class="fa fa-circle"></i> <span>Krishna Barua, <em>Lalmohan &amp; Aita</em>, United Publishers, Delhi, 2001.</span></li>
            </ul>


           <h2 class="faculty-bio-sub-heading">Chapters in Edited Books:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Space and Landscape: Deep Ecology in Raja Rao's The Serpent and the Rope and Gao Xingjian's Soul Mountain." (Chapter 9) <em>Consciousness, Theatre, Literature and the Arts 2013</em> ed. Daniel Meyer-Dinkgräfe. London. Cambridge Scholars Publishing. ISBN10:1443854190 ISBN-13: 978-1443854191. 1 February 2014, pages 134-144.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua and Anurag Bhattacharyya. "Place, Landscape and Self in Gao Xingjian's Soul Mountain." <em>Landscape, Seascape and the Spatial Imagination.</em> Center for Humanities and Social Sciences National Sun Yet-sen University. Ed Jonathan White. Palgrave Macmillan 2014.</span></li>
            <li><i class="fa fa-circle"></i> <span>Rosy Saikia &amp; Krishna Barua. The Creative Process: A Study of Aesthetics in Rainer Maria Rilke's Selected Works. <em>Consciousness, Theatre, Literature and the Arts 2013</em> ed. Daniel Meyer-Dinkgräfe. London Cambridge Scholars Publishing. ISBN10:1443854190 ISBN-13: 978-1443854191. (chapter 8) 1 February 2014, pages 124-133.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. The Androgyne Factor: The Ambiguity of Existence in Patrick White's "The Solid Mandala and The Twyborn Affair." (page nos: 79-89) chapter 5. <em>Patrick White: Critical Issues.</em> Ed. Ishmeet Kaur; New Delhi: Atlantic Publishers. ISBN 10: 8126918993 / ISBN 13: 9788126918997 2014, pages 79-89.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. The Zany Fool? Representations in Raja Rao's "The Cat and Shakespeare" and Patrick White's "The Solid Mandala." Chapter 10. <em>Patrick White: Critical Issues.</em> Ed. Ishmeet Kaur; New Delhi: Atlantic publishers. ISBN 10: 8126918993 / ISBN 13:, 2014, (pages 135-149).</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Place, Landscape and Self in Gao Xingjian's Soul Mountain." <em>Landscape, Seascape and the Spatial Imagination,</em> ed. Jonathan White, National Sun Yet-sen University Taiwan, Palgrave, 2014.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "I know not where is the song!" <em>The Editor's Choice. Contemporary Short Stories in Indian English</em> Sunil Sharma &amp; Jaydep Sarangi ed. Gnosis, Author's Press, Delhi 2011.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Rabindranath Tagore's Chokher Bali." <em>Compendium of 20th Century Novelists and Novels.</em> Michael D. Sollars, ed., Texas Southern University, Facts on File, New York, 2007. ISBN number 081-60-62331.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "To garden the Wilderness: John Fowles' The Tree," <em>Literature, Writing, and the Natural World,</em> English Association of Pennsylvania State Universities (EAPSU), Mansfield University of Pennsylvania. Vol. 4, Fall 2007, ISBN 1548-1964.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The core of reality: The Mandala as a leitmotif in Patrick White's novels." <em>Fact and Fiction: Readings in Australian Literature.</em> Amit Sarwal (Ed.) New Delhi: Authors press. 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Dialogues: Jiddu Krishnamurti and John Fowles," <em>Nature and Human Nature: Literature, Ecology, Meaning</em> Edited by Murali Sivaramakrishnan. Prestige Books New Delhi, 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The ubiquitous British Fool: Humour in Jane Austen and P.G. Wodehouse." in <em>I dearly love a laugh: Jane Austen and Comedy. IDIOM</em> Editors: Peter Lawrance and Margaret Saltau. The Victorian Association for the Teaching of English Volume 44, Number 1, 2008. Melbourne, Australia.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Jane Austen in Patrick White?" <em>Jane Austen and the comic Tradition.</em> Laura Carrol ed. La Trobe University Press Melbourne, Australia. 2009.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "John Fowles: Ebony Towers." <em>The Facts on File Companion to the British Short Story.</em> ed. Dr Andrew Maunder New York: Facts on File, March 2, 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Experiments of Truth: restructuring of Gandhian experiences in Naipaul's Half a life and Magic Seeds." <em>The V.S. Naipaul Special Issue, The South Asian Review,</em> 2006 University of Pittsburgh.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Negotiating cultural boundaries: discursive strategies in Raja Rao's The Serpent and the Rope and V.S. Naipaul's Half a life," <em>Confluences XXIV. Border lines and Border lands,</em> Corinne Alexander Garner ed. Centre. Universite Paris X Nanterre. June 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Beyond the Postcolonial Fool in Patrick White &amp; Raja Rao," <em>Cross/cultures: Readings in the Post/colonial Literatures in English,</em> Marc Delrez (ed.) Aachen and Liege, Rodopi, Amsterdam. 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Sankardeva and the cultural Renaissance in Assam." <em>The Encyclopedia of the Middle East and South Asia.</em> ed. Gordon D. Newby, Department of Middle Eastern and South Asian Studies, Emory University, published by M.E. Sharpe, 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Fragmented Consciousness of the Androgynous Personality in Patrick White's The Twyborn Affair," <em>Scientific and Philosophical Studies on Consciousness,</em> S. Menon &amp; M.G. Narasimhan (ed.), National Institute of Advanced Studies, Indian Institute of Science Campus, Bangalore, 1999.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "A Journey to Darkness: in Nadine Gordimer's, A World of Strangers." <em>volume on Commonwealth &amp; American Womens' Discourse,</em> Institute of Commonwealth &amp; American Studies &amp; English studies &amp; English Language, Mysore, 1995.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Bhakti as the Essence of Peace: Srimanta Sankaradeva's aesthetics of Prayer." <em>Peace in Dialogue: Reflections on North East India,</em> Indian Council of Social Science Research, Akanshya Publishers, New Delhi, November 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Towards a more vibrant classroom: the necessity of change in framing and teaching English Courses in Higher Education." <em>Role of Higher Education for Social Change in India with Special Reference to North Eastern Region, Proceedings Volume,</em> Shillong College Golden Jubilee Celebration Committee, Shillong, July, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Betweenness: The poetics of enactment in Raja Rao's Kanthapura." <em>Indian Writing in English: A collection, dedicated to Dr B S Valke.</em> Chetan Deshmane ed. 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Reconstructions of the Truth in Mahatma Gandhi's An Autobiography: The Story of My Experiments with Truth and Orhan Pamuk's Istanbul: Memories of a City." <em>Truth, Interpretation and Language.</em> University of Mumbai and the Indian Council of Philosophical Research, New Delhi. 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "V.S. Naipaul in Magic Seeds." <em>Renewing the Ties: Reviewing the Bonds' A Study of Diasporic Literature.</em> Dr. Binod Mishra (ed) BITS, Pilani, India. Pencraft International. 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "cosmic and acosmic, a redefinition of Being and Time in Raja Rao's The Serpent and the Rope and Patrick White's Voss." <em>Conference volume, International Conference on Commonwealth Literature.</em> Dept of Humanities &amp; Social Sciences, Indian Institute of Technology Roorkee, 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Nowness: a restructuring of mandalic consciousness in Patrick White's novels." <em>Convergences and Divergences,</em> IASA Volume of Third International Conference of Indian Association for the Study of Australia (IASA) on Australia and India: (9-11 January 2006).</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Steinbeck and Patrick White: A comparative study." <em>The New Literary Miscellany,</em> Sanjoy Saksena (ed). Allahbad, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Language of Enactment: of tension or synthesis in presentation: the rasa-dhvani or point of view: in translating Dr Bhabendra Nath Saikia's Deuka," <em>Translation: Poetics &amp; Practice,</em> Anisur Rahman (ed.) Creative Books, New Delhi, 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "You will be burnt up most likely…..Patrick White's Voss: a postmodernist view," <em>Contemporary Literary Criticism: Theory &amp; Practice (From Postmodern to Post Colonialism)</em> ed Prof N.Chandra Vol 2 Authors Press: New Delhi, 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The dancing prankster or the enlightened seer? in Raja Rao's The Cat and Shakespeare and Patrick White's The Solid Mandala," <em>Modern Practical Criticism (from Modernism to Stylistics)</em> ed. Prof N.Chandra, Vol 1. Authors Press: New Delhi, 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The horizontal &amp; the vertical: Perspectives on Reading," <em>Interpretation of Texts,</em> K.C.Baral, (ed.) Director, CIEFEL, Shillong, Pencraft International, New Delhi. 2002.</span></li>
            </ul>


            <h2 class="faculty-bio-sub-heading">Lectures and Conference Presentations:</h2>
            <h2 class="faculty-bio-sub-heading">Invited Lectures:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>INVITED Speaker: Krishna Barua. "Place, Landscape and Self in Gao Xingjian's Soul Mountain." <em>International conference Landscape, Seascape and the Spatial Imagination,</em> Center for Humanities and Social Sciences, National Sun Yet-sen University, Taiwan, 2 Nov - 3 Nov, 2012.</span></li>
            <li><i class="fa fa-circle"></i> <span>INVITED Speaker: Krishna Barua. "The ubiquitous British Fool: Humour in Jane Austen and P.G. Wodehouse." <em>International Jane Austen: Jane Austen's Comedy,</em> International conference, La Trobe University, Melbourne, Australia, November 29th – December 2nd 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>INVITED Speaker: Krishna Barua. "Cosmic and Acosmic" a redefinition of Being and Time in Raja Rao's The Serpent and the Rope and Patrick White's Voss. Invited Lecture, Program in Comparative literature, English Department, University of Texas at Austin, November 1, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Invited Visiting Professorship, New Study Program in English, Tomas Bata University in Zlin, Czech Republic, 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Invited Lecture on V.S. Naipaul, Centre for Colonial &amp; Post Colonial Research, School Of English, University of Kent, January 15th, 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Invited Talk on Patrick White, chaired by Prof Robert Ross, Director, Harry Ransom Centre, University of Texas in Austin, 10th April 2000.</span></li>
            <li><i class="fa fa-circle"></i> <span>Resource Person, Katha North East India Symposium, New Delhi, 22nd – 28th April, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Awarded Associateship for a month for three consecutive years, Indian Institute of Advanced Study, Shimla, (from Sept 1995, 96, 97).</span></li>
            <li><i class="fa fa-circle"></i> <span>Granted The Middle Award, American Studies Research Centre, Hyderabad, from June 3rd - July 6th, 1995.</span></li>
            <li><i class="fa fa-circle"></i> <span>Resource Person, Refresher course in English, Arunachal University, Rono Hills, Doimukh, Arunachal Dec 24th, 2001.</span></li>
            <li><i class="fa fa-circle"></i> <span>Expert (English, Minor Research Project), UGC, North Eastern Regional office, Beltola, Guwahati.</span></li>
            <li><i class="fa fa-circle"></i> <span>Member, Undergraduate Course (English), Three Year Degree course, Gauhati University. (1998-2000).</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Keynote Speaker:</h2>
            <ul class="faculty-bio-info-list">
              <li><i class="fa fa-circle"></i> <span> Krishna Barua .The Poetics and the Politics of Representation. National Seminar on Culture
                        Studies and Literary Applications Pansukura Banamali College (In collaboration with
                        Vidyasagr University English Teachers' Consortium),W Bengal., 3rd and 4th of Feb ,2012</span></li>
              <li><i class="fa fa-circle"></i> <span>Krishna Barua The Aesthetics of Prayer: in Shrimanta Sankaradeva, Third international
                conference on Bhakti Movement and Srimanta Sankaradeva,,Asom Kalatirtha in collaboration
                with Srimanta Sankaradeva kalashetra, Guwahati ,9th March –11th March,2007.
                </span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">International Conferences:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. The Perfect Soufflé: the stylistics of humour in P. G. Wodehouse. <em>International Humour conference, International Society for Humor Studies,</em> Holy Names University, Oakland, California, July 1-3rd, 2015.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. The mandalic design: Maya Angelou's I Know Why the Caged Bird Sings. <em>American Literature Association, 25th Annual Conference,</em> Washington D.C. 2014.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Space and Landscape: Deep Ecology in Raja Rao's The Serpent and the Rope and Gao Xingjian's Soul Mountain." <em>Fifth International Conference Consciousness, Theatre, Literature and the Arts,</em> The Lincoln School of Performing Arts, University of Lincoln, UK. June 15-17 June 2013.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Place, Landscape and Self in Gao Xingjian's Soul Mountain." <em>International conference Landscape, Seascape and the Spatial Imagination,</em> Center for Humanities and Social Sciences, National Sun Yet-sen University, Taiwan, 2 Nov - 3 Nov, 2012.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Body: A Reading of the Androgyne in Patrick White's The Solid Mandala and The Twyborn Affair." <em>Patrick White Centenary International Conference Association For The Study Of Australasia In Asia,</em> Dept of English, University of Hyderabad, Hyderabad 5-7 November, 2012.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "huzun: the melancholy of ruins in Orhan Pamuk's Istanbul: Memories of a City." The Territorial Imagination. <em>Modern Language Association, International convention,</em> Los Angeles, USA. 6th Jan 2011 - 9th Jan 2011.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "On Beauty, Art and Man: Rabindranath Tagore and Ananda K. Coomaraswamy." <em>Global Conference: Beauty,</em> Oxford, United Kingdom from Monday 19th September, 2011.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Oceanic circle: Mahatma Gandhi's Ramrajya." <em>Archiving Utopia: Utopia as Archive, International conference, Society for Utopian Studies,</em> State College, Pennsylvania, USA, 20 to 23 October 2011.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Inventing the Truth: Maya Angelou's I Know Why the Caged Bird Sings." <em>The Black Atlantic: Colonial and Contemporary Exchanges, International conference, Stanford Forum for African Studies,</em> Stanford University, California, 28-29 October, 2011, USA.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Ramayana in Performance: The Ankiyā Nāt of Assam." <em>International conference South Asian Literary Association (SALA),</em> Seattle, USA. January 4-7, 2011.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The ubiquitous British Fool: Humour in Jane Austen and P.G. Wodehouse." <em>International Jane Austen: Jane Austen's Comedy, International conference,</em> La Trobe University, Melbourne, Australia, November 29th – December 2nd 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The oceanic circle: Mahatma Gandhi's and his Ram rajya." <em>Demanding the Impossible: Utopias3 Conference,</em> Centre for Comparative Literature and Cultural Studies, Monash University, Victoria, Australia, Dec 6th-8th Dec, 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Mapping the territories: Mishi Saran's Chasing the Monk's Shadow. A Journey in the Footsteps of Xuanxang." <em>Tenth International Conference Thinking Territory: Affect and Attachment towards Land in South Asia,</em> Forum on Contemporary Theory, Baroda, at International Centre, Goa 16-19 December 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. Robert Ross's Australia: departure, passage and arrival. <em>"Culture and Identity: Re-Imagining Australia and India" IASA-IV Biennial International Conference, Indian Association for the Study of Australia.</em> Burdwan University, Kolkatta, 22-24 January 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. Identity as Being: The Tai Phakes of Assam. <em>'Northeast India and Its Transnational Neighbourhood',</em> Dept of Humanities &amp; Social studies, IIT Guwahati, with Leiden University, the School of Oriental and African Studies of the University of London, and the University of Amsterdam, at IIT Guwahati 17th January - 18th January, 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Life in fiction, and fiction in life: A reading of Syed Abdul Malik's Rup Tirthar Jatri." <em>National Conference on Life writing and the North East,</em> Tezpur Central University, 22nd-24th Feb, 2008.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Reconstructions of the Truth in Mahatma Gandhi's An Autobiography: The Story of My Experiments with Truth and Orhan Pamuk's Istanbul: Memories of a City." <em>Truth, Interpretation and Language, International conference,</em> University of Mumbai and the Indian Council of Philosophical Research, New Delhi, as a part of the sesquicentennial celebrations of the University of Mumbai, March 20-22, 2007.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Experiments with Truth: restructuring of Gandhian experiences in Naipaul's Half a Life and Magic Seeds." <em>4th International Conference of the United States Chapter of the Association for Commonwealth Literature and Language Studies,</em> Santa Clara University, California, 27th-29th Oct, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "To garden the Wilderness: John Fowles's The Tree." <em>Literature, Writing, and the Natural World. EAPSU Conference 2006,</em> Mansfield University of Pennsylvania, October 20, 21, and 22, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Cultural Studies and the Engineer." <em>Technology and the Literature and Writing Classrooms, Special Session, The Midwest Modern Language Association, International Conference,</em> Palmer House Hilton, Chicago November 9-12, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. Nowness: a restructuring of mandalic consciousness in Patrick White's novels. <em>Convergences and Divergences. IASA Third International Conference of Indian Association for the Study of Australia,</em> organized by Australia-India Council and Australian Education International, co-sponsored by the University of New South Wales, Sydney. At Pune university, from 9-11 January 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The face: a study of the other in Patrick White's The Solid Mandala and John Steinbeck's Of Mice and Men." <em>International conference on John Steinbeck, The New Steinbeck Society of America,</em> Brigham Young University-Idaho, Rexburg March 22-25, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Rabindranath Tagore and Ananda K. Coomaraswamy: Towards an Indian interpretation on Art, Beauty and Man." <em>Aestheticism: dehumanizing or Rehumanizing Art, the Artist, and the Artistic Receptor? ACLA (American Comparative Literature Association) 2006 Conference,</em> March 23-26, 2006, Princeton, USA.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Sense and Nonsense in Raja Rao's The Cat and Shakespeare and Patrick White's The Solid Mandala." <em>Constructions of Literary Form, Imperialisms--Temporal, Spatial, Formal. American Comparative Literature Association,</em> The Pennsylvania State University, March 11-13, 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "How Truth is Invented: The Art &amp; Craft of Autobiography in a cybernetic classroom." <em>3rd International Conference on Education and Information Systems, Technologies and Applications (EISTA 2005)</em> and the International Conference on Cybernetics and Information Technologies, Systems and Applications (CITSA 2005), in Orlando, USA, July 14-17, 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Body and the Androgyne: The ambiguity of existence in Patrick White's The Solid Mandala and The Twyborn Affair." <em>The Third International Conference on New Directions in the Humanities,</em> 2nd August-5th August, Cambridge University, UK. 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "cosmic and acosmic ---- a redefinition of Being and Time in Raja Rao's The Serpent and the Rope and Patrick White's Voss." <em>International Conference on Commonwealth Literature,</em> Dept of Humanities &amp; Social Sciences, Indian Institute of Technology Roorkee, Oct. 13-15, 2005.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Vedic Modernisation in Modern India- the urgent necessity of its resurgence." <em>World Congress on Vedic Sciences,</em> organized by Vijnana Bharati, Hebbal, Bangalore, &amp; Indian council of Philosophical Research, 9-11 August, 2004, Bangalore, India.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The mindscape of the artist: In Patrick White's The Vivisector." <em>2nd International Conference on Australia-Identity, Representation and Belonging, The Indian Association for the study of Australia,</em> January 15-17, Pune 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Betweenness: The patterning of plurality in Raja Rao's Kanthapura." <em>International Congress of Social Philosophy,</em> Guwahati University, Assam, India, 9-12th Dec, 2004.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Negotiating cultural boundaries: discursive strategies in Raja Rao's The Serpent and the Rope and V.S. Naipaul's Half a life." <em>Border lines and Border lands, International conference,</em> organized by Centre de Recherche Espaces/Ecritures, Universite Paris X Nanterre, 26th–27th June, 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "A journey through the transcultural world: correspondences &amp; diversities: in Raja Rao's The Serpent &amp; the Rope And V.S. Naipaul's Half A Life." <em>Inside The whale: The Postcolonial and Globalisation, International conference,</em> Northampton University, UK, 11th July-13th July, 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "English in a cybernetic classroom." <em>English: The Condition of the Subject, International conference</em> organized by Royal Holloway, University of London, Egham, Surrey, 17th July-19th July, 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "London in Naipaul's Half A Life &amp; The Mimic Men." <em>Literary London conference, International conference,</em> organized by Goldsmiths College, University Of London, 25th July-27th July, 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Essence as Totality: In Shakespeare's The Phoenix and the Turtle." <em>British Shakespeare Association's International Conference</em> on 29th-31st August, 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Being and Time." <em>Going Global—the Futures of Comparative Literature. The 29th Annual Conference of the Southern Comparative Literature Association</em> at The University of Texas at Austin, The Program in Comparative Literature and the College of Liberal Arts, 19-21 September 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Disenchantment? Situating Modernism in Modern India." <em>Rethinking Modernity, Sixth international convention,</em> Forum on Contemporary Theory, Jaipur, 13th-17th Dec 2003.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "From the black and white to the grey -- The Fuzzy World in Raja Rao's The Cat and Shakespeare." <em>Mind &amp; Consciousness: Various Approaches, Micon 2002, International Conference,</em> Indian Institute of Technology, Kharagpur, 9th–11th January, 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Core of Reality: Patrick White's The Tree of Man: An Eastern perspective." <em>First International Conference of The Indian Association for the Study of Australia,</em> 12th January, 2002, Madras University, Chennai.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Wet, boiling, superficial: through the artist's eyes: cityscapes in Patrick Whites the Vivisector." <em>Urban Australia: The Urban experience in Australian Literature, American Association of Australian Literary Studies Panel, The 2002 Modern Language Association international Convention,</em> New York, 27-30 Dec 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Loss of language in V.S. Naipaul's Half a Life." <em>Constructing Identities: local and Global, The Fifth International Convention,</em> Forum on Contemporary Theory, Shillong 15-18th December, 2002.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Mandala as a leitmotif in Patrick White's The Tree of Man &amp; The Solid Mandala." <em>Narrative 2000, International Conference,</em> Emory University &amp; Georgia Institute of Technology, Atlanta, USA, 6th April-9th April, 2000.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Essence as Totality: in Shakespeare's The Phoenix and the Turtle." <em>International conference on Shakespeare's Narrative Poems,</em> Royal Holloway, University of London, Surrey. July 27th–29th, 2000.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Signifier &amp; The Signified." <em>International Conference on Buddhistic Philosophy &amp; Contemporary Issues,</em> University of Roorkee, 13th Nov-15th Nov, 2000.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Encounters and Betrayals-Refiguring the politics of contesting selves in Bhabendranath Saikia's fiction." <em>Worlds into Words and Words into Worlds, A Katha International Interdisciplinary conference on the short story,</em> Sanskriti Kendra, Anandgram, New Delhi, December 16th–21st, December 2000.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "Beyond the Post colonial Fool in Patrick White &amp; Raja Rao." <em>Cross/cultures: Readings in the Post/colonial Literatures in English, International Conference of the Association for the Study of the New Literatures in English (ASNEL),</em> Aachen and Liege, Amsterdam, June, 2000.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "displacement &amp; alienation." <em>International Conference, Australian Literary Studies,</em> Park City, Utah, April 15th–18th, 1999.</span></li>
            <li><i class="fa fa-circle"></i> <span>Krishna Barua. "The Fragmented Consciousness of the Androgynous Personality in Patrick White's The Twyborn Affair." <em>International conference on Scientific and Philosophical Studies on Consciousness,</em> National Institute of Advanced Studies, Indian Institute of Science campus, Bangalore, 1999.</span></li>
            </ul>

           <h2 class="faculty-bio-sub-heading">Courses Designed and Taught:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span>Department of Humanities &amp; Social Sciences, IIT Guwahati (from 1998-2009):</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS405</strong> Inventing the Truth: The Art and Craft of Autobiography.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS 605:</strong> PERSPECTIVES ON INDIA'S DEVELOPMENT — The course intends to give perspectives of recent ideas and reflections on the global economic and social liberalizations and their impact on the vision of a twenty-first century India.</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">Ph.D. Programme in English (from 2001):</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span><strong>HS-703</strong> A Compendium-Literature, Language and Literary Criticism. Course credits: 3 0 0 6. — The interrelation of English with other literatures, the historical development and the structure of the English Language &amp; literary criticism.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS-704</strong> Crossing Cultures. Course credits: 3 0 0 6. — Basically the course is interdisciplinary. To relate the history of ideas, life and thought, myth &amp; tradition to the existing interest in literature and present a dissertation or a seminar paper.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS-707</strong> Invisible Exchanges. Course credits: 3 0 0 6. — Within the field of English Literature, comparison between literature and another medium such as music or visual Arts. Scholars must present an original composition of not more than 5,000 words.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS-708</strong> The Art of Fiction. Course credits: 3 0 0 6. — A critical, comparative &amp; historical study of the English novel during a special period of English Literature. A wide range of novels, and the works of some particular novelists in depth (taken from the period after the 1920's).</span></li>
            </ul>

            <h2 class="faculty-bio-sub-heading">B.Tech Programme:</h2>
            <ul class="faculty-bio-info-list">
            <li><i class="fa fa-circle"></i> <span><strong>HS204</strong> American Literature: A Retrospect / &amp; Structural English for Communication. Elective, 4th Semester (from 1999-2003). Course credits: 3 0 0 6. — The American Dream; Transcendentalism in the poems of Walt Whitman, Emily Dickinson; Pastoral in Robert Frost. The American Paradox—naturalism in John Steinbeck &amp; Existentialism in Ernest Hemingway. Self liberation in Mark Twain &amp; societal values in Arthur Miller.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS303</strong> Perspectives: Commonwealth Literature / &amp; Business English. Elective, 6th Semester (from 1999-2003). Course credits: 3 0 0 6. — The polarities of colonial diaspora in Patrick White (Australia), of social milieu &amp; terrain in Chinua Achebe (Nigeria), of metaphysical meditation in Raja Rao (India) &amp; displaced psyche of exile in V.S. Naipaul (Trinidad).</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS304</strong> Sense &amp; Excess: From the Renaissance to the Moderns / &amp; Business English &amp; Phonetics. Elective, 6th Semester (from 1999-2002). Credits: 3-0-0-6. — Literature based on an overview of the totality of the Self in drama. Poetry &amp; fiction through ages with attention to the prescribed texts on Marlowe, S. Butler, Raja Rao, and poems of Robert Browning, Rilke and Octavio Paz.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS104:</strong> Words, Sounds, Rhetorics. English Elective, Semester 1. (Taught from 2002-2009). Course credits: 3 0 0 6. — Tracing of the origin of the word, its various roots, rhetorical discourses (including elocution) &amp; the figures of speech. The aural medium: acquisition of word meaning involving the process of mapping concepts into a system of sounds or signs, &amp; Phonetics.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS 206:</strong> Voices, Cultures, Strategies. English Elective, IVth Semester (Taught from 2002-2009). Credits: 3-0-0-6.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS405:</strong> Inventing the Truth: The Art and Craft of Autobiography. English Elective, 8th Semester (Taught from 2005-2015). Course credits: 3-0-0-6.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>HS-101</strong> English (from 1998-2001).</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>Face to Face</strong> — A Course on Communication Skills (taught Oct 8-17, 2001). Non credited course for B.Tech (3rd &amp; 4th Year) &amp; M.Tech students.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>Effective Communication Skills</strong> (taught 2000) — A non credited capsule course of communication skills for staff and employees.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>Effective Communication Skills</strong> (taught 2002-2003) — A non credited English course for M.Sc (Maths) and M.Tech (Electronics).</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>Strategies and Skills:</strong> Language as a tool for persuasion. Ph.D Programme, Physics, two lectures, November, 2006.</span></li>
            <li><i class="fa fa-circle"></i> <span><strong>Technical Writing:</strong> Principles and Practice. Ph.D Programme, Dept. of Physics, two lectures, November, 2006.</span></li>
            </ul>

          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- copy this inside the body  -->
@endsection
