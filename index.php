<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LIO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./favicon/favicon-16x16.png"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body class="home-page">
    <header>
      <nav class="navbar px-3 px-md-5">
        <div class="navbrand">
          <a href="./index.html" class="brand">
            <img src="./assets/images/liotemp.png" width="75" alt="" />
          </a>
        </div>
        <ul class="menu my-auto mr-1" id="menu">
            <li class="menu-item">
              <a href="#startups" class="menu-link">For Startups</a>
            </li>
            <li class="menu-item">
              <a href="#investors" class="menu-link">For Investors</a>
            </li>
            <li class="menu-item">
              <a href="#team" class="menu-link">Team</a>
            </li>
          </ul>
        <div class="d-flex">
          <div class="d-flex">
            <button
              class="main-btn mr-2"
              type="button"
              data-toggle="modal"
              data-target="#membershipModal"
              data-backdrop="static"
              data-keyboard="false"
            >
              Membership
            </button>
            <div class="burger" id="burger">
              <span class="burger-open">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16">
                  <g fill="#252a32" fill-rule="evenodd">
                    <path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z" />
                  </g>
                </svg>
              </span>
              <span class="burger-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                  <path
                    fill="#252a32"
                    fill-rule="evenodd"
                    d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main class="px-3 px-md-5 w-100">
      <section class="hero-container">
        <div
          class="row py-5 px-3 px-md-5"
          background="./assets/images/design1.jpg"
        >
          <div
            class="col-md-12 col-lg-6 col-xl-7 d-flex flex-column justify-content-center mb-4"
          >
            <div class="hero_left_side">
              <h1 class="hero_title">
                Invest in our Game-Changing Startups and Cross-Leverage
                Businesses.
              </h1>
              <br />
              <div class="hero_subheader">
                Join our Members-Only Exclusive Club where leading Investors
                fund the next wave of Startups & Businesses.
              </div>
              <div class="hero_buttons_block">
                <a href="#" class="main-btn mr-4">Invest Now</a>
              </div>
            </div>
          </div>
          <div
            class="col-md-12 col-lg-6 col-xl-5 d-flex justify-content-center hero_right_side"
          >
            <img
              class="img-fluid my-auto"
              src="./assets/images/liotemp.png"
              alt=""
            />
          </div>
        </div>
      </section>
      <section class="statistic-container py-5">
        <div class="row">
          <div class="col-12 col-md-6 col-lg text-center">
            <h2>100</h2>
            <p>Exclusive Members</p>
          </div>
          <div class="col-12 col-md-6 col-lg text-center">
            <h2>25,000cr</h2>
            <p>Combined Networth</p>
          </div>
          <div class="col-12 col-md-6 col-lg text-center">
            <h2>12</h2>
            <p>Startups</p>
          </div>
          <div class="col-12 col-md-6 col-lg text-center">
            <h2>22cr</h2>
            <p>Funds Raised</p>
          </div>
          <div class="col-12 col-md-6 col-lg text-center">
            <h2>200+</h2>
            <p>Opportuinites Evaluated</p>
          </div>
        </div>
      </section>
      <hr />
      <section class="row max-w-960 mx-auto pt-5">
        <div class="col-md-6 d-flex justify-content-center mb-4 mb-md-0">
          <img class="img-fluid" src="./assets/images/img1.png" alt="" />
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <p class="fc-purple mb-2">For funds Managers</p>
          <h3>One parter for all your venture needs</h3>
          <p>
            Remove the friction from investing. AngelList handles funds admin,
            custom funds formation, regulatory fillings, taxes, and more.
          </p>
          <div>
            <button class="main-btn">Get started</button>
          </div>
        </div>
      </section>
      <section id="startups" class="startup-container py-5">
        <p class="title">Integrated Approach</p>
        <h2>Startup & Investor Development</h2>
        <p class="desc mb-5">
          We bundle together all the elements that help startups & Investors
          become more successful.
        </p>
        <div class="row">
          <div class="col-6 col-lg-4 d-flex justify-content-center mb-5">
            <div class="icon-box">
              <i class="fas fa-handshake"></i>
              <p class="icon-title">Business Accelerator</p>
            </div>
          </div>
          <div class="col-6 col-lg-4 d-flex justify-content-center mb-5">
            <div class="icon-box">
              <i class="fas fa-handshake"></i>
              <p class="icon-title">Startup Incubator</p>
            </div>
          </div>
          <div class="col-6 col-lg-4 d-flex justify-content-center mb-5">
            <div class="icon-box">
              <i class="fas fa-handshake"></i>
              <p class="icon-title">Provides Investing platform with SPVs</p>
            </div>
          </div>
          <div class="col-6 col-lg-4 d-flex justify-content-center mb-5">
            <div class="icon-box">
              <i class="fas fa-handshake"></i>
              <p class="icon-title">Technology Consultant</p>
            </div>
          </div>
          <div class="col-6 col-lg-4 d-flex justify-content-center mb-5">
            <div class="icon-box">
              <i class="fas fa-handshake"></i>
              <p class="icon-title">Aids Capacity Building & Risk Assessment</p>
            </div>
          </div>
          <div class="col-6 col-lg-4 d-flex justify-content-center">
            <div class="icon-box">
              <i class="fas fa-handshake"></i>
              <p class="icon-title">Facilitates Effective Networking</p>
            </div>
          </div>
        </div>
      </section>
      <section id="investors" class="achievements-container py-5">
        <h2 class="text-center text-white">LIO's Achievements</h2>
        <div
          class="d-flex flex-column flex-lg-row p-5 d-flex justify-content-center align-items-center"
        >
          <div class="mr-0 mr-lg-4 mb-4 mb-lg-0">
            <div class="p-4">
              <h3 class="title">Fund Raised</h3>
              <ul>
                <li>
                  8 Cr of Investments raised for WhiteSpace Alpha, a Hedge Fund
                  based in Hyderabad.
                </li>
                <li>
                  2 Cr raised for Zero21, an EV startup based in Hyderabad
                </li>
                <li>
                  75 Lacs raised for Big Bang Boom Solutions, a Defense Tech
                  Coompany based in Chennai
                </li>
                <li>
                  50 Lacs raised for a Short Film by a reputed Telangana
                  Distributor
                </li>
                <li>
                  Over 2 Cr raised for CodeYoung, an Educational Startup based
                  in Bangalore
                </li>
                <li>
                  50 Lacs raised for Hala Mobility, an EV startup based in
                  Hyderabad
                </li>
              </ul>
            </div>
          </div>
          <div class="ml-0 ml-lg-4">
            <div class="p-4">
              <h3 class="title">Opportunities</h3>
              <ul>
                <li>
                  Equity picked up by a member in a Mumbai-based SaaS company
                </li>
                <li>
                  Initiated discussions for an Ed-tech ERP platform for a
                  complete buyout
                </li>
                <li>
                  Facilitated Real-Estate opportunities in Khajaguda and Kokapet
                  at Discounted Prices
                </li>
                <li>
                  Opened a Real-Estate opportunity in Austin, Texas near the
                  Tesla Giga Plant
                </li>
                <li>
                  Providing opportunities to pursue hobbies and participate in
                  sports activites
                </li>
                <li>
                  Effective Networking Opportunities for Cross-Leverage at
                  Business Shower events
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="slide-containter">
        <div class="d-flex justify-content-between mb-4">
          <h3 class="my-auto">Over 12,000 startups funded</h3>
          <div class="d-flex">
            <button class="slide-btn mx-1">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slide-btn mx-1">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="gallery-icon-box">
              <img src="./assets/images/img3.png" alt="" />
              <p>Brex</p>
            </div>
          </div>
          <div class="col-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="gallery-icon-box">
              <img src="./assets/images/img1.png" alt="" />
              <p>Brex</p>
            </div>
          </div>
          <div class="col-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="gallery-icon-box">
              <img src="./assets/images/ico1.png" alt="" />
              <p>Brex</p>
            </div>
          </div>
          <div class="col-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="gallery-icon-box">
              <img src="./assets/images/ico1.png" alt="" />
              <p>Brex</p>
            </div>
          </div>
          <div class="col-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="gallery-icon-box">
              <img src="./assets/images/ico1.png" alt="" />
              <p>Brex</p>
            </div>
          </div>
          <div class="col-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="gallery-icon-box">
              <img src="./assets/images/ico1.png" alt="" />
              <p>Brex</p>
            </div>
          </div>
        </div>
      </section>
      <section id="team" class="founders">
        <div class="founders-cont">
          <div class="founders-heading">
            <h1>TEAM</h1>
          </div>
          <div class="people">
            <div class="person">
              <img src="./assets/images/team/mohnish.jpg" class="person-pic" />
              <div class="person-desc">
                <h3>Mohnish Yerra <span>CEO</span></h3>
                <p>
                  Mohnish's passion for cricket knows no bounds! He is a part of
                  the YouTube channel, Boys Played Well, which he started with
                  his teammates from Delhi Public School, Hyderbad. He also has
                  a knack for entrepreneurship with an MBA in Business Strategy
                  from IE Business School and a Bachelors Degree in Engineering
                  (Minor in Economics and Entrepreneurship) from Purdue
                  University, USA. An Angel Investor, Global Electric
                  Manufacturing Leader, and Digital Marketing Expert, he is very
                  excited to lead HCC and take it to new heights.
                </p>
              </div>
            </div>
            <div class="person">
              <img src="./assets/images/team/shiva.png" class="person-pic" />
              <div class="person-desc">
                <h3>Shiva Subramanium <span>CFO</span></h3>
                <p>
                  Shiva holds a Bachelor of Enginerring Degree from IIT-BHU,
                  Varanasi, and a Post Graduate Diploma in Business Management
                  from IIM Ahmedabad. An avid angel investor, Shiva possesses a
                  keen knowledge of the financial market and has been a
                  passionate stock market bull. He also holds a place as a board
                  member of Nanohealth, a healthcare startup, and is an advisor
                  to Whitespace Alpha, a leading hedge fund. The ardent cricket
                  fan idolises the legends of the game MS Dhoni, Virat Kohli,
                  Sachin Tendulkar, and Virender Sehwag. He also enjoys playing
                  badminton, yoga and watching movies.
                </p>
              </div>
            </div>
            <div class="person">
              <img src="./assets/images/team/nikhil.png" class="person-pic" />
              <div class="person-desc">
                <h3>Nikhil Anjuri <span>CTO</span></h3>
                <p>
                  An Electrical Engineering and Information Sciences gradute
                  from Penn State, has always been interested in sports,
                  representing his school & college teams in Cricket, Football
                  and Badminton. After graduation, he moved to Silicon Valley,
                  where he got his experience in working with Startups. He's a
                  Blockchain enthusiast and a early crypto adopter and looking
                  to build a web3 community for LIO.
                </p>
              </div>
            </div>
            <div class="person">
              <img src="./assets/images/team/gaurav.jpg" class="person-pic" />
              <div class="person-desc">
                <h3>Gaurav Joshi <span>Manager, Operations</span></h3>
                <p>
                  Gaurav is an enthusiastic cricket fan and a passionate
                  entrepreneur who has been heading operations at the Hyderbad
                  Cricket Club for 3 years now. He has a Bachelor's Degree in
                  Mechanical Enginerring from Dr. A.P.J Abdul Kalam Technical
                  State University and a Postgraduate Degree from the Central
                  Institute of Tool Design. He founded an innovative automotive
                  startup based out of Hyderbad when he was still pursuing
                  college. His cricket idols are the evergreen Virender Sehwag
                  and Adam Gilchrist.
                </p>
              </div>
            </div>
            <div class="person">
              <img src="./assets/images/team/anushri.png" class="person-pic" />
              <div class="person-desc">
                <h3>Anushri Sharma <span>Manager, Member Engagement</span></h3>
                <p>
                  With an educational background in Botany and Spanish, Anushri
                  always likes to experiment with whatever she is doing. She has
                  served as an intern with CSE (Centre for Science and
                  Environment) where her article was published in their
                  fortnightly magazine Down To Earth. She has worked with
                  WWF-INDIA as a Senior Programme Officer on Sustainability
                  projects across country. With an experience of designing a
                  roadmap, coordinating and executing various pilot projects of
                  WWF-INDIA, she has also conducted monitoring and evaluation.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <section class="join-section py-5 px-3">
      <div class="mx-w-860 mx-auto py-5">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center mb-4 mb-md-0">
            <img class="img-fluid" src="./assets/images/img3.png" alt="" />
          </div>
          <div class="col-md-6 px-3 d-flex flex-column justify-content-center">
            <h3>Join AngelList Venture</h3>
            <p>
              We're giving more people the opportunity to participate in the
              venture economy and more startups the resources they need to
              change the world.
            </p>
            <div>
              <button
                class="main-btn mr-2"
                type="button"
                data-toggle="modal"
                data-target="#showerModal"
                data-backdrop="static"
                data-keyboard="false"
              >
                Learn more
              </button>
              <button class="outline-btn">Join us</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="my-0" />
    <footer
      class="d-flex flex-column flex-lg-row justify-content-between px-3 px-sm-5 py-3"
    >
      <div class="mt-auto mb-4 mb-lg-auto">
        <a href="./index.html" class="brand">
          <img
            class="mx-auto"
            src="./assets/images/liotemp.png"
            width="100"
            alt=""
          />
        </a>
      </div>
      <div class="text-center text-lg-right">
        <ul class="socials mb-1">
          <li>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
        <p>
          HEADQUARTERS: 3RD FLOOR, VAMSIRAM JYOTHI CELESTE, CBI COLONY,<br />
          KAVURI HILLS, JUBILEE HILLS, HYDERABAD - 500033.
        </p>
        <p class="mb-0">
          LEADERS OF INDIA ORGANIZATION© 2022. A VENTURE OF WATTEY SHOT PVT LTD.
          ALL RIGHTS RESERVED.
        </p>
      </div>
    </footer>
    <!-- modal -->
    <div
      class="modal fade pr-0"
      id="membershipModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="membershipModal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered px-3" role="document">
        <div class="modal-content">
          <form class="membership-form">
            <button
              type="button"
              class="close-btn"
              data-dismiss="modal"
              aria-label="Close"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1em"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 32 32"
              >
                <path
                  fill="currentColor"
                  d="M24 9.4L22.6 8L16 14.6L9.4 8L8 9.4l6.6 6.6L8 22.6L9.4 24l6.6-6.6l6.6 6.6l1.4-1.4l-6.6-6.6L24 9.4z"
                />
              </svg>
            </button>
            <div class="form-inner">
              <div class="form-head">
                <span>MEMBERSHIP ENQUIRY FORM</span>
              </div>
              <div class="form-body">
                <div class="left-form">
                  <div class="user-info">
                    <label for="user-info" class="form-lbl"
                      >Tell Us a Little About Yourself</label
                    >
                    <div class="form-name-inputs">
                      <input
                        class="form-text-inputs"
                        placeholder="First Name"
                        type="text"
                        id="fname"
                        name="fname"
                        required
                      />
                      <input
                        class="form-text-inputs"
                        placeholder="Last Name"
                        type="text"
                        id="lname"
                        name="lname"
                        required
                      />
                    </div>
                    <input
                      class="form-text-inputs-all"
                      placeholder="Age"
                      type="number"
                      id="age"
                      name="age"
                      required
                    />
                    <input
                      class="form-text-inputs-all"
                      placeholder="email"
                      type="email"
                      id="email"
                      name="email"
                      required
                    />
                    <input
                      class="form-text-inputs-all"
                      placeholder="Phone Number"
                      type="text"
                      id="phone"
                      name="phone"
                      required
                    />
                    <input
                      class="form-text-inputs-all"
                      placeholder="Industry"
                      type="text"
                      id="industry"
                      name="industry"
                      required
                    />
                    <input
                      class="form-text-inputs-all"
                      placeholder="Company"
                      type="text"
                      id="company"
                      name="company"
                      required
                    />
                    <div class="form-residence">
                      <div class="res-left">
                        <label for="res-left" class="form-lbl"
                          >Where Do You Live?</label
                        >
                        <input
                          class="form-text-inputs-all"
                          placeholder="City"
                          type="text"
                          id="liveCity"
                          name="liveCity"
                          required
                        />
                      </div>
                      <div class="res-right">
                        <label for="res-right" class="form-lbl"
                          >Place Of Work</label
                        >
                        <input
                          class="form-text-inputs-all"
                          placeholder="City"
                          type="text"
                          id="workCity"
                          name="workCity"
                          required
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="right-form">
                  <label class="form-lbl"
                    >Please Provide Reference of Atleast One LIO Member</label
                  >
                  <input
                    class="form-text-inputs-all"
                    placeholder="Reference 1"
                    type="text"
                    id="reference1"
                    name="reference1"
                    required
                  />
                  <input
                    class="form-text-inputs-all"
                    placeholder="Reference 2"
                    type="text"
                    id="reference2"
                    name="reference2"
                    required
                  />
                  <label id="no-reference"
                    ><input type="checkbox" id="did-not-had-ref" />I don’t know
                    any member</label
                  >
                  <div class="more-info">
                    <label for="more-info" class="form-lbl"
                      >Something we should know about you.</label
                    >
                    <textarea
                      id="moreInfoTxt"
                      name="moreInfoTxt"
                      cols="10"
                      rows="5"
                      required
                    ></textarea>
                  </div>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" class="submit-btn">SUBMIT</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div
      class="modal fade pr-0"
      id="showerModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="membershipModal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered px-3" role="document">
        <div class="modal-content">
          <form enctype="multipart/form-data" class="shower-form">
            <button
              type="button"
              class="close-btn"
              data-dismiss="modal"
              aria-label="Close"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1em"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 32 32"
              >
                <path
                  fill="currentColor"
                  d="M24 9.4L22.6 8L16 14.6L9.4 8L8 9.4l6.6 6.6L8 22.6L9.4 24l6.6-6.6l6.6 6.6l1.4-1.4l-6.6-6.6L24 9.4z"
                />
              </svg>
            </button>
            <div class="form-inner">
              <div class="form-head">
                <span>BUSINESS SHOWER ENQUIRY FORM</span>
              </div>
              <div class="form-body d-block">
                <div class="user-info">
                  <input
                    class="form-text-inputs-all"
                    placeholder="Name"
                    type="text"
                    id="name"
                    name="name"
                    required
                  />
                  <select
                    class="form-text-inputs-all"
                    placeholder="Category"
                    type="text"
                    id="category"
                    name="category"
                    required
                  >
                    <option value="startup">startup</option>
                    <option value="opatunity">business opportunity</option>
                  </select>
                  <input
                    class="form-text-inputs-all"
                    placeholder="Company"
                    type="text"
                    id="company"
                    name="company"
                    required
                  />
                  <input
                    class="form-text-inputs-all"
                    placeholder="City"
                    type="text"
                    id="city"
                    name="city"
                    required
                  />
                  <input
                    class="form-text-inputs-all"
                    placeholder="Contact Number"
                    type="number"
                    id="contactNumber"
                    name="contactNumber"
                    required
                  />
                  <input
                    class="form-text-inputs-all"
                    placeholder="Email"
                    type="email"
                    id="email"
                    name="email"
                    required
                  />
                  <div class="d-flex align-items-center">
                    <span id="filename">Select your file</span>
                    <label class="mb-0" for="docInfo">Browse<input type="file" id="docInfo" name="docInfo"
                    required></label>
                  </div>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" class="submit-btn">SUBMIT</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script/script.js"></script>
  </body>
</html>
