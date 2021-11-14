<?php
echo file_get_contents(__DIR__ . "/style/header.html");
?>

<h1>About Cambridge Student Election System</h1>
<h3>Why CSES over CamSU's voting system?</h3>
<p>
  - <b>Field-tested:</b> We use the open-source BoB system which has been used for thousands of elections over more than a decade throughout the university, without challenge. This system was built by David Eyers, Martin Lucas-Smith, David Turner, Simon Hopkins and Robin Whittaker. This system used to live at <a href="https://vote.cusu.cam.ac.uk/">https://vote.cusu.cam.ac.uk/</a>, but was retired in 2021 by CamSU.</p>
<p>
  - <b>Anonymity:</b> The security architecture means that your vote is never stored with your user ID, and cannot be easily associated by an admin. It is not possible for the election admins or Sysadmins to see how an individual voted.
</p>
<p>
  - <b>Verifiability:</b> The voting token system employed by BoB allows any individual to verify that their vote has been correctly included in the vote count - you do not have to trust the system to know that your vote has been correctly counted. In CamSU's election system, votes could be forged by an evil sysadmin (or indeed, the manual voting system is prone to mistakes or forged votes).
</p>
<p>
  - <b>Instant counts:</b> As CSES vote counting happens automatically, results are instantly available at the end of an election. No waiting for someone to email you your election results.
<p>
  - <b>Open-source:</b> The source code for CSES is <a href="https://github.com/qjcr/bob">publicly</a> <a href="https://github.com/qjcr/bob-gui">available</a> under a permissive GPL license, and we welcome contributions and reviews by anyone.
</p>
<p>
  The CSES is hosted on a physical server hosted within the University's data network. The website is hosted behind Cloudflare.
</p>

<h3>Current Sysadmins</h3>
<ul class="name-list sysadmin-list">
  <li><a href="mailto:bpc38@cam.ac.uk">Brendan Coll</a> (Queens College JCR, Computer Officer)</li>
  <li><a href="mailto:car83@cam.ac.uk">Cameron Robey</a> (St John's College, Unaffiliated)</li>
  <li><a href="mailto:mb2345@cam.ac.uk">Mikel Bober-Irizar</a> (Queens College JCR, Accommodation & Facilities Officer)</li>
</ul>

<p><em>
  These users have access to the physical CSES server. This server is hardened and setup with audit trails such that any tampering would be obvious to the other sysadmins. In the long term, we would like to move to a security architecture where no students are single-handedly capable of making system changes.
<br>
  While sysadmins have access to the server and code running on it, the system of vote verification means that a sysadmin would never be able to tamper with votes without this being verifiable by voters and returning officers.
</em></p>

<h3>Current Members</h3>
<ul class="name-list members-list">
  <li>Queens' College JCR</li>
  <li>Magdalene College JCR</li>
  <li>Fitzwilliam JCR</li>
  <li>King's College Student Union</li>
  <li>Jesus College Student Union</li>
  <li>St John's College JCR</li>
</ul>

<?php
echo file_get_contents(__DIR__ . "/style/footer.html");
?>
