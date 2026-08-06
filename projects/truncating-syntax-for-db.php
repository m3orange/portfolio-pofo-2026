<p>When one of that pipeline's services fails across Production, Ingest, Delivery, Ordering, or Quality,  an incident has to be triaged, assigned, investigated, and resolved. The problem was never the data; it was access to it. Every incident already lived in Elastic, but reaching it meant writing Python queries, which quietly locked investigations to the handful of people who could. The moment FacOps needed extra hands from to help carry the investigation load, that technical barrier became the bottleneck.
</p>

<div class="pull-quote-area">
    <div class="pull-quote" style="padding: 0;">
        <div class="row">
            <div class="col" style="padding: 28px 28px 22px 40px;">We're the air traffic controllers, but we're also in charge of the airport's operations. Right now, <strong>finding where to solve the issue is like manually looking for a lost bag. That's exactly how it feels.</strong>
                <div class="pullquote-person-name">– FacOps team member</div>
            </div>
            <div class="col tarmac-worker"><img src="assets/idd-tarmac-worker.png"></div>
        </div>
    </div>
</div>

<p>FacOps's original ask was contained: give engineers and stakeholders an intuitive, full view into a ticket's details and comments, plus enough context on how incidents relate to one another that people could connect the dots faster. Engineers ask was simple: bring all cross-referenced data to the surface and centralize everything in one place, no context switching, and make FacOps's requests for help to cut through all the notification noise we already have.</p>
<!-- <span class="dots">...</span> -->

<div class="hidden-collapsed-content">
        <p>Delivering that meant translating a query-scripting task into an interface: a dashboard that pulls monitoring stats from Elastic in real time, surfaces new versus known issues with heavy visual labeling for fast sorting and filtering, and expands any ticket into a single view where the error payload, related incidents, and a threaded history of developer findings sit side by side. But researching how mature incident-management platforms solve these problems surfaced opportunities well beyond the original scope — and I brought them back as wireframed recommendations FacOps could phase and prioritize. Among them: a custom IDD knowledge base that centralizes Common Errors so hard-won resolutions stay tethered to a ticket rather than scattering across wikis; saved searches and predictive, multi-source querying across logs and documentation at once; embedded Activity Logs with in-place search, download, and a side-by-side CLI, so engineers stop switching windows mid-investigation; and role-customizable dashboards so FacOps, engineering, and support each monitor what matters to them.</p>

        <p>Because I could read the system the way an engineer would, the designs stayed rooted in what IDD actually is. I worked from the real error payloads and the patch commands developers run to resolve them, and built the flows around genuine integration points — Elastic, internal AWS modules, Teams and email for broadcasting an incident, and Jira for spinning up development work directly from a resolved ticket. That fluency is also why the wireframes doubled as a decision tool: beyond validating our shared understanding of the experience and aligning on each role's needs, they gave FacOps and engineering a concrete way to weigh technical specifications and constraints — what could and couldn't be built — before anything moved to final design. The throughline was simple: every insight, comment, and resolution stays connected to a single IDD ticket, so that solving one incident quietly makes the whole system's knowledge base stronger.</p>
</div>

      <input type="checkbox" id="btn" />
      <label for="btn"></label>


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------


<p>That makes it a three-sided marketplace, with all the trust, discovery, and booking mechanics each side demands: hosts listing and managing an evening, artists building a profile and gaining exposure, and the public browsing concerts and purchasing tickets. There was no existing product to refine:  this was a greenfield MVP, designed and built from zero while the founders were still on the venture-capital circuit. Therefore, every screen had to do double duty: function as a real product and stand up as the artifact that helped tell the story to investors.</p>
<p>As Lead Designer I owned the whole surface: the information architecture, the three registration and onboarding flows, the matching and discovery experience, the ticket-purchase path and a custom checkout module, and a full component inventory built to scale as features were added. Because the product was also the pitch, the work extended well past interface design into the entire brand: identity, SEO, and the motion graphics that gave a young company presence it couldn't yet afford to buy. Every one of those pieces went beyond the original ask, but on an MVP with everything to prove, they were the difference between a prototype and something that felt real.</p>
<div class="hidden-collapsed-content">
<p>Where the project became a true test of range was at the line between design and engineering, the place I'm most comfortable. Rather than hand off static comps, I created the template pages by coding the front-end HTML and CSS myself so the engineering team could take clean, on-spec markup, while allowing them to focus instead on the deeper application logic and API queries. I also built the in-app and email notifications; all the SEO content and programming; the transactional email templates in Sendgrid and their connection to the right moments in each user's workflow: the confirmations and notifications that keep a marketplace's three sides in sync. It's the kind of contribution that only happens when a designer can actually speak and write the language of the build: nothing was lost in translation, because I was working on both sides of it.</p>
</div>
      <input type="checkbox" id="btn" />
      <label for="btn"></label>



      --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Atlas is a geospatial, big data, visualization, and analytics tool that displays large volumes of virtual data for any region in the world and provides situational awareness that can be used for mission planning. 


<p>It is a powerful tool built by engineers for engineers… and it showed. The desktop application could visualize satellite imagery, track assets across the globe, and scrub through temporal data at cislunar scales, but its interface reflected none of that sophistication. Raw layer names substituted for navigation, UI elements and features that had been added throughout different release versions and without the cohesion that a unified design system affords, dialogs floated unanchored over the viewport, and a cluttered bottom toolbar tried to hold together playback controls, coordinates, and time scrubbing simultaneously. Users who weren't already deep experts in the system had little chance of finding their footing.</p>
<p>Atlas's redesign wasn't just a visual refresh; the product's scope had expanded significantly, from Earth-based geospatial analysis to full cislunar operations, introducing navigation concepts like Earth-Moon Lagrange points that had no precedent in any standard interface pattern. This is what made a purpose-built design system non-negotiable: the domain demanded components that simply didn't exist elsewhere. The result was a modern web application with a clean icon-based sidebar, a structured multi-step data import flow with sample data previews and inline validation, a searchable and sortable layers panel with meaningful hierarchy, and a timeline with proper playback controls, each solving a specific pain point that the original application had left unaddressed.</p>
<div class="hidden-collapsed-content">
<p>Some of the biggest challenges in designing views and interactions were based around various technological restrictions we needed to work with: a complex backend handling high quantities of processes at a time; an existing tech stack we were required to build over in order to maintain backward compatibility with legacy systems' intricacies; processing massive amounts of data in tandem with user-generated datasets (static and temporals), all the while maintaining healthy loading performance; hardware restrictions informed by strict security protocols. Equally important was giving users control over the customization of their workspace, by introducing panels that could be detached, moved around and docked anywhere, so that users could customize their views. In an application where the map is the work, screen real estate is precious. The design had to get out of the way as much as it had to be present, allowing analysts to maximize their view of the map and the temporal scenes, keeping within reach the tools they need, and hide everything else that they don't.</p>
</div>


<input type="checkbox" id="btn" />
<label for="btn"></label>


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------

The Atlas system was built specifically for a geospatial visualization tool displaying large volumes of virtual data for any region in the world and provides situational awareness that can be used for mission planning.


<p>A design system is only as strong as its ability to scale without fracturing. The Atlas Design System was built for a complex geospatial mapping application, which meant that generic component libraries weren't an option. The product's unique interaction model demanded a purpose-built foundation. The system covers the full spectrum from core tokens –typography scales, a structured color palette, spacing rules– to domain-specific components such as custom GIS and camera navigation icon sets, responsive layers panel with hierarchical data management, and map tool controls designed specifically for 2D and 3D spatial environments.</p>

<p>Every component is documented with anatomy diagrams, element-level attribute specs, and behavioral guidelines for edge cases, including how the sidebar adapts across horizontal, diagonal, and vertical resizing. The result is a system that gives product teams the building blocks to move fast without losing coherence, and that speaks the language of the application it was built to serve.</p>

<p>Just as important as the artifact was how it was made. Rather than the usual "hand off the specs and see you back when it's build," <strong>I remained embedded with the engineering team through the entire build,</strong> a level of collaboration that was far from typical at the company. In daily standups we walked through specifications in detail and resolved open questions on the spot instead of parking them in a backlog. And as engineers implemented components and patterns,<strong>I reviewed and approved their merge requests myself </strong> — reading the pull requests and checking each built component against its intended design, attribute by attribute, before the engineering lead merged to production. Being trusted with that much say over what actually shipped, rather than dropping out at the spec stage, is rare for a designer — and it's the surest way I know to keep what gets built faithful to what was designed: a system that doesn't just describe the product, but stays accountable to the code that implements it.</p>


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Hub is Vantor’s subscription-based cloud environment that provides on-demand access to high-resolution satellite imagery tasking, historical imagery archives, and global-scale 2D and 3D map streaming and downloading.

<p>Map applications have a fundamental tension: the map is the product, but tools have to live somewhere. On Hub, that tension had reached a breaking point: tools were scattered without a clear organizational logic, the basemap switcher was buried, navigation controls competed with content for space, and users had no way to customize the interface to match their preferences for a workspace. The underlying capability was strong; the interface just didn't reflect it.</p>
<p>The redesign started with a simple principle: organize tools by intent, not implementation. The result is a layout where every zone has a job. Search lives at the top left, persistent and unobtrusive. The Tool Workbench sits top-center, grouping everything used to add information and insight over the map: AOI creation, annotations, drawing tools. Navigation controls stay bottom-right, out of the way until needed. The left sidebar handles service access, segmented by data type. Nothing is hidden, but nothing competes with the map either.</p>
<p>The details reinforce the logic throughout. The basemap switcher borrows directly from Google Earth's mental model, because the fastest path to familiarity is the one people already know. The Workspace Settings panel provide users with options to customize their workspace, such as toggling individual navigation elements on or off and choosing their unit system and coordinate format. Equally important was the project creation flow: rather than pulling users out of the map to configure a new project, a side panel reveals a quick form with name, description, AOI, and users and role assignment, all while the map stays live behind it. In a tool where the map is the work, the design had to earn its place on screen.</p>


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------






<p>Vantor's administration platform (used internally as well as on the client side) had become a liability: it had grown organically over time, accumulating features without a coherent design strategy to hold them together, and had turned into a dense, inconsistent interface that required significant ramp-up time for new users and created daily friction for power users who needed to move quickly. Administrators responsible for provisioning users, managing permissions, and monitoring credit consumption across hundreds of geospatial data subscriptions were working around the tool rather than with it, especially when assigning user permissions using a system that offered little structure and no guardrails. Workflows that should have taken seconds stretched into multi-step detours with unnecessary amounts of clicks, and critical information was buried under layers of navigation that reflected system logic rather than user goals.</p>
<p>A cross-functional workshop with product managers, engineers, and other stakeholders surfaced a consistent theme: the platform reflected system logic, not human workflows. The redesign was organized around seven principles distilled directly from that research: </p>
<div class="emphasis-block">
    <div class="row">

        <div class="col col-12 col-md-6 admin-principles">
            <ul>
                <li>Lead with key data</li>
                <li>Progressive disclosure</li>
                <li>Customizable experiences</li>
                <li>Faster access to insights</li>
            </ul>    
        </div>

        <div class="col col-12 col-md-6 admin-principles">
            <ul>
                <li>Intuitive navigation</li>
                <li>Early trouble detection with automatization</li>
                <li>User permissions done right</li>
            </ul>    
        </div>
        
    </div>
</div>
<p>In practice, this meant a dashboard that surfaces critical metrics — sq km usage, streaming and download breakdowns, geographic distribution, recent orders — without requiring a single extra click. It meant an architecture that peels the onion: account managers always land at the macro view and drill into activations and users in place, without losing context. And it meant a configurable notification system that alerts admins to credit thresholds, expiring activations, and pending suspensions before they become problems — because as one stakeholder put it:</p>
<div class="pull-quote-area">
    <div class="pull-quote">"Let problems find me, rather than forcing me hunt them down.”</div>
</div>
<p>Permissions, historically one of the platform's biggest pain points, were rebuilt from the ground up, through the introduction of Team Buckets: named groups that inherit a defined set of permissions and credit limits, so admins configure complex settings once and apply to many. Individual permissions are searchable, grouped by product, annotated with descriptions and key contact person, and saveable as presets. New customer admins received equal attention: a branded welcome email, a guided first-login state, and a three-step user creation flow all make account setup approachable from day one. Throughout the platform, quick actions surface inline (resetting a password, adjusting a credit limit, suspending a user) so the most common tasks never require a context switch.</p>