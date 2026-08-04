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