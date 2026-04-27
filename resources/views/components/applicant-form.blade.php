<form class="mt-8 grid gap-4 sm:gap-6 sm:grid-cols-2 px-4 sm:px-6 lg:px-8" action="{{ route('apply.submit') }}" method="POST">
  @csrf
  <div class="sm:col-span-2">
    <label for="full-name" class="mb-2 block text-sm font-semibold text-slate-800">Full Name*</label>
    <input id="full-name" name="full_name" type="text" class="form-field" placeholder="Your full name" />
  </div>

  <div>
    <label for="age" class="mb-2 block text-sm font-semibold text-slate-800">Age*</label>
    <input id="age" name="age" type="number" class="form-field" placeholder="19" />
  </div>

  <div>
    <label for="phone" class="mb-2 block text-sm font-semibold text-slate-800">Phone Number*</label>
    <input id="phone" name="phone_number" type="tel" class="form-field" placeholder="+234 800 000 0000" />
  </div>

  <div>
    <label for="eamil" class="mb-2 block text-sm font-semibold text-slate-800">Email*</label>
    <input id="email" name="email" type="text" class="form-field" placeholder="Email" />
  </div>

  <div>
    <label for="gender" class="mb-2 block text-sm font-semibold text-slate-800">Gender*</label>
    <select id="gender" name="gender" class="form-field" required>
      <option value="">Select Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>
  </div>

  <div>
    <label for="destination" class="mb-2 block text-sm font-semibold text-slate-800">Preffered study destination*</label>
    <select id="destination" name="preferred_study_destination" class="form-field">
      <option>UK</option>
      <option>Canada</option>
      <option>Ireland</option>
      <option>Australia</option>
      <option>USA</option>
    </select>
  </div>

  <div>
    <label for="interview" class="mb-2 block text-sm font-semibold text-slate-800">Other countr(ies) interested in*</label>
    <input id="interview" name="other_countries_interested" type="text" class="form-field" placeholder="Optional" />
  </div>

  <div>
    <label for="level" class="mb-2 block text-sm font-semibold text-slate-800">Program interested in? *</label>
    <select id="level" name="program_interested" class="form-field">
      <option>A Levels</option>
      <option>Foundation</option>
      <option>Undergraduate</option>
      <option>Postgraduate</option>
    </select>
  </div>

  <div>
    <label for="year" class="mb-2 block text-sm font-semibold text-slate-800">Other programme interested in?*
      <select id="year" name="intake_period" class="form-field">
        <option>2026 intake</option>
        <option>2027 intake</option>
        <option>Not sure yet</option>
      </select>
  </div>

  <div>
    <label for="qualification" class="mb-2 block text-sm font-semibold text-slate-800">Highest qualification?*</label>
    <select id="qualification" name="highest_qualification" class="form-field">
      <option>SSCE</option>
      <option>OND</option>
      <option>HND</option>
      <option>Bachelor's degree</option>
    </select>
  </div>

  <div>
    <label for="question" class="mb-2 block text-sm font-semibold text-slate-800">Other qualification *</label>
    <input id="question" name="other_qualification" type="text" class="form-field" placeholder="Optional" />
  </div>

  <div>
    <label for="visa-refusal" class="mb-2 block text-sm font-semibold text-slate-800">Any previous visa refusal?*</label>
    <select id="visa-refusal" name="previous_visa_refusal" class="form-field">
      <option>No</option>
      <option>Yes</option>
    </select>
  </div>

  <div>
    <label for="how-heard" class="mb-2 block text-sm font-semibold text-slate-800">How did you hear about us?*</label>
    <select id="how-heard" name="referral_source" class="form-field">
      <option>A friend</option>
      <option>Instagram</option>
      <option>Referral partner</option>
      <option>Google search</option>
    </select>
  </div>

  <div class="sm:col-span-2 pt-3 mx-auto">

    <button type="submit" class="secondary-pixel-anchor group relative inline-flex items-center h-11 justify-between  px-1 overflow-hidden bg-[#16484B] border border-white/20 rounded-[5px] no-underline transition-all duration-300 hover:border-white/40">

      <div class="secondary-pixel-grid absolute inset-0 grid pointer-events-none">
      </div>

      <span class="relative z-10 anchor-text text-[#E2C065] transition-colors duration-500 group-hover:text-[#16484B]">
        Submit Application
      </span>

      <div class="relative z-10 flex items-center justify-center w-8 h-8 ml-4 bg-[#E2C065] rounded-[5px] transition-all duration-500 group-hover:bg-[#16484B] hover:-translate-y-1 hover:scale-110">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="w-5 h-5 text-[#16484B] transition-transform duration-500 group-hover:text-[#E2C065]"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2.5"
          stroke-linecap="round"
          stroke-linejoin="round">
          <line x1="7" y1="17" x2="17" y2="7"></line>
          <polyline points="7 7 17 7 17 17"></polyline>
        </svg>
      </div>

    </button>
  </div>
</form>