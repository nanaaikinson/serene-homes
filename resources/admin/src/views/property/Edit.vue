<template>
  <div class="card">
    <div class="px-5 py-5">
      <div class="formMsg"></div>

      <form @submit.prevent="submitForm">
        <div class="mb-4">
          <div class="card-header mb-3">Property Information</div>

          <div class="row">
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="form-group">
                <label for="title">Title *</label>
                <input
                  type="text"
                  name="title"
                  id="title"
                  class="form-control"
                  v-model.trim="form.title"
                  required
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
              <div class="form-group">
                <label for="location">Location *</label>
                <input
                  type="text"
                  name="location"
                  id="location"
                  class="form-control"
                  v-model.trim="form.location"
                  required
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
              <div class="form-group">
                <label for="property_type">Property Type *</label>
                <select
                  name="property_type"
                  id="property_type"
                  class="custom-select"
                  v-model="form.property_type"
                  required
                >
                  <option value>Select type</option>
                  <option value="0" disabled>---------------</option>
                  <option
                    :value="type.id"
                    :key="i"
                    v-for="(type, i) in propertyTypes"
                  >{{ type.name }}</option>
                </select>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
              <div class="form-group">
                <label for="contract_type">Contract Type *</label>
                <select
                  name="contract_type"
                  id="contract_type"
                  class="custom-select"
                  v-model="form.contract_type"
                  required
                >
                  <option value>Select type</option>
                  <option value="0" disabled>---------------</option>
                  <option value="short stay">Short stay</option>
                  <option value="rent">Rent</option>
                  <option value="for sale">For sale</option>
                </select>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
              <div class="form-group">
                <label for="bedrooms">Bedrooms *</label>
                <input
                  min="1"
                  type="number"
                  name="bedrooms"
                  id="bedrooms"
                  class="form-control"
                  v-model.trim="form.bedrooms"
                  required
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
              <div class="form-group">
                <label for="bathrooms">Bathrooms *</label>
                <input
                  min="1"
                  type="number"
                  name="bathrooms"
                  id="bathrooms"
                  class="form-control"
                  v-model.trim="form.bathrooms"
                  required
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
              <div class="form-group">
                <label for="living_rooms">Living Rooms</label>
                <input
                  min="0"
                  type="number"
                  name="living_rooms"
                  id="living_rooms"
                  class="form-control"
                  v-model.trim="form.living_rooms"
                  required
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
              <div class="form-group">
                <label for="video_url">Video Url</label>
                <input
                  type="text"
                  name="video_url"
                  id="video_url"
                  class="form-control"
                  v-model.trim="form.video_url"
                  placeholder="Eg: https://www.youtube.com/embed/F8xrBRn121Y"
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
              <div class="form-group">
                <label for="garages">Garages</label>
                <input
                  min="0"
                  type="number"
                  name="garages"
                  id="garages"
                  class="form-control"
                  v-model.trim="form.garages"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-lg-3 mb-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="furnished"
                    v-model="form.furnished"
                  />
                  <label class="custom-control-label" for="furnished">Furnished</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 mb-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="self_contained"
                    v-model="form.self_contained"
                  />
                  <label class="custom-control-label" for="self_contained">Self Contained</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 mb-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="private_compound"
                    v-model="form.private_compound"
                  />
                  <label class="custom-control-label" for="private_compound">Private Compound</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-4">
          <div class="card-header mb-3">General Amenities</div>

          <div class="row">
            <div class="col-12">
              <h6>Appliances</h6>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="air_conditioning"
                    v-model="form.air_conditioning"
                  />
                  <label class="custom-control-label" for="air_conditioning">Air Conditioning</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="cooker"
                    v-model="form.cooker"
                  />
                  <label class="custom-control-label" for="cooker">Cooker</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="washing_machine"
                    v-model="form.washing_machine"
                  />
                  <label class="custom-control-label" for="washing_machine">Washing Machine</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="fans" v-model="form.fans" />
                  <label class="custom-control-label" for="fans">Fans</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="refrigerator"
                    v-model="form.refrigerator"
                  />
                  <label class="custom-control-label" for="refrigerator">Refrigerator</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="microwave"
                    v-model="form.microwave"
                  />
                  <label class="custom-control-label" for="microwave">Microwave</label>
                </div>
              </div>
            </div>

            <div class="col-12 mt-3">
              <h6>Connectivity</h6>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="internet_access"
                    v-model="form.internet_access"
                  />
                  <label class="custom-control-label" for="internet_access">Internet Access</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="satellite_tv"
                    v-model="form.satellite_tv"
                  />
                  <label class="custom-control-label" for="satellite_tv">Satellite Tv</label>
                </div>
              </div>
            </div>

            <div class="col-12 mt-3">
              <h6>Reserve Utilities</h6>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="generator"
                    v-model="form.generator"
                  />
                  <label class="custom-control-label" for="generator">Generator</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="water_reservoir"
                    v-model="form.water_reservoir"
                  />
                  <label class="custom-control-label" for="water_reservoir">Water Reservoir</label>
                </div>
              </div>
            </div>

            <div class="col-12 mt-3">
              <h6>Other</h6>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="garden"
                    v-model="form.garden"
                  />
                  <label class="custom-control-label" for="garden">Garden</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="annex"
                    v-model="form.annex"
                  />
                  <label class="custom-control-label" for="annex">Annex (Boys' quarters)</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="roof_terrace"
                    v-model="form.roof_terrace"
                  />
                  <label class="custom-control-label" for="roof_terrace">Roof Terrace</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="swimming_pool"
                    v-model="form.swimming_pool"
                  />
                  <label class="custom-control-label" for="swimming_pool">Swimming Pool</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 md-3">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="security_service"
                    v-model="form.security_service"
                  />
                  <label class="custom-control-label" for="security_service">Security Service</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-4">
          <div class="card-header mb-3">Overview & Photos</div>

          <div class="row">
            <div class="col-12">
              <h6>Overview *</h6>
            </div>

            <div class="col-md-12 mb-4">
              <VueEditor v-model.trim="form.overview" :editor-toolbar="toolbar" />
            </div>

            <div class="col-12 mb-3">
              <button
                @click="triggerUpload"
                class="btn btn-dark px-4"
                type="button"
                id="addPhotoBtn"
              >Add Photo(s)</button>
            </div>

            <div class="d-none">
              <input type="file" name="photo" id="photo" @change="addPhoto" />
            </div>

            <div class="col-md-4 col-lg-3 mb-3" v-for="(photo, i) in photos" :key="i">
              <div class="property-photo-container">
                <div class="image mb-2">
                  <img :src="photo.url" />
                </div>

                <div class="d-flex">
                  <button
                    class="btn btn-warning btn-sm w-50 mr-2"
                    type="button"
                    :disabled="photo.cover"
                    @click="setCover(i)"
                  >Cover photo</button>

                  <button
                    class="btn btn-warning btn-sm w-50"
                    type="button"
                    @click="removePhoto(i)"
                  >Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center">
          <button class="btn btn-success px-5" id="submitBtn" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { VueEditor } from "vue2-editor";

export default {
  name: "PropertyEdit",
  components: { VueEditor },
  data() {
    return {
      form: {
        title: "",
        location: "",
        property_type: "",
        contract_type: "",
        video_url: "",
        bedrooms: 0,
        bathrooms: 0,
        living_rooms: 0,
        garages: 0,
        furnished: false,
        self_contained: false,
        private_compound: false,
        air_conditioning: false,
        cooker: false,
        washing_machine: false,
        fans: false,
        refrigerator: false,
        microwave: false,
        internet_access: false,
        satellite_tv: false,
        generator: false,
        water_reservoir: false,
        garden: false,
        annex: false,
        roof_terrace: false,
        swimming_pool: false,
        security_service: false,
        overview: ""
      },
      propertyTypes: [],
      photos: [],
      toolbar: [
        ["bold", "italic", "underline", "strike"],
        ["color", "background"],
        [{ list: "ordered" }, { list: "bullet" }]
      ]
    };
  },
  methods: {
    async submitForm(e) {
      const formMsg = document.querySelector(".formMsg");
      const btn = document.querySelector("#submitBtn");
      const formData = new FormData();
      let errors = "";
      let coverIndex = null;

      if (this.photos.length < 1) {
        errors += "<span class='d-block'>Please add at least 1 photo</span>";
      }

      if (this.form.overview.length < 1) {
        errors += "<span class='d-block'>The overview field is required</span>";
      }

      if (errors.length) {
        Swal.fire("", errors, "info");
        return;
      }

      // Add data to formdata
      for (const [key, value] of Object.entries(this.form)) {
        formData.append(key, value);
      }

      for (let i = 0; i < this.photos.length; i++) {
        const photo = this.photos[i];
        const hasCover = photo.cover;
        if (hasCover) coverIndex = i;

        formData.append("photos[]", photo.file);
      }

      formData.append("cover_index", coverIndex ? coverIndex : 0);

      try {
        const response = await Axios.post("/api/properties", formData);
        const res = await response.data;
        Swal.fire({
          title: "Success",
          text: res.message,
          icon: "success",
          allowOutsideClick: false
        }).then(result => {
          if (result.value) {
            this.$router.push({ name: "Properties" });
          }
        });
      } catch (err) {
        const { status, data } = err.response;
        let errorBag = "";

        if (status === 400) {
          data.errors.forEach(el => {
            errorBag += `<span class="d-block">${el}</span>`;
          });
        } else {
          errorBag = data.message;
        }

        // formMsg.innerHTML = `<div class="alert alert-danger">${errorBag}</div>`;
        Swal.fire("Error", errorBag, "error");
      }
    },

    triggerUpload() {
      const input = document.querySelector("input[name='photo']");
      input.click();
    },

    addPhoto(e) {
      const input = e.target;
      const file = input.files[0];
      const type = file.type
        .split("/")
        .pop()
        .toLowerCase();
      const size = file.size;
      let photo = { url: "", file: "", cover: false };

      if (type != "jpg" && type != "jpeg" && type != "png") {
        Swal.fire("", "File must be of type jpg, jpeg or png", "info");
        return;
      }

      if (size / 1024 / 1024 > 2) {
        Swal.fire("", "File must be less than or equal to 2MB", "info");
        return;
      }

      const reader = new FileReader();
      reader.onload = function(e) {
        photo.url = e.target.result;
      };

      reader.readAsDataURL(file);
      photo.file = file;
      this.photos.push(photo);
      input.value = "";
    },

    setCover(index) {
      const existing = this.photos.findIndex(el => el.cover === true);
      if (existing !== -1) {
        this.photos[existing].cover = false;
      }
      this.photos[index].cover = true;
    },

    removePhoto(index) {
      this.photos = this.photos.filter((el, i) => i !== index);
    },

    async fetchData() {
      const response = await Axios.get("/api/properties/property-types");
      const res = await response.data;
      this.propertyTypes = res.data;
    },

    setData({ property, photos, features }) {
      this.form.title = property.title;
      this.form.location = property.location;
      this.form.property_type = property.property_type_id;
      this.form.contract_type = property.contract_type;
      this.form.video_url = property.video_url;
      this.form.bedrooms = property.bedroom;
      this.form.bathrooms = property.bathroom;
      this.form.living_rooms = property.living_area;
      this.form.garages = property.garage;
      this.form.furnished = property.furnished === 1 ? true : false;
      this.form.self_contained = property.self_contained === 1 ? true : false;
      this.form.private_compound =
        property.private_compound === 1 ? true : false;
      this.form.air_conditioning =
        features.air_conditioning === 1 ? true : false;
      this.form.cooker = features.cooker === 1 ? true : false;
      this.form.washing_machine = features.washing_machine === 1 ? true : false;
      this.form.fans = features.fans === 1 ? true : false;
      this.form.refrigerator = features.refrigerator === 1 ? true : false;
      this.form.microwave = features.microwave === 1 ? true : false;
      this.form.internet_access = features.internet_access === 1 ? true : false;
      this.form.satellite_tv = features.satellite_tv === 1 ? true : false;
      this.form.generator = features.generator === 1 ? true : false;
      this.form.water_reservoir = features.water_reservoir === 1 ? true : false;
      this.form.garden = features.garden === 1 ? true : false;
      this.form.annex = features.annex === 1 ? true : false;
      this.form.roof_terrace = features.roof_terrace === 1 ? true : false;
      this.form.swimming_pool = features.swimming_pool === 1 ? true : false;
      this.form.security_service =
        features.security_service === 1 ? true : false;
      this.form.overview = property.description;
    }
  },

  created() {
    this.fetchData();
  },

  async beforeRouteEnter(to, from, next) {
    const mask = to.params.mask;
    if (!mask) {
    }

    try {
      const response = await Axios.get("/api/properties/" + mask);
      const res = await response.data;

      next(vm => vm.setData(res.data));
    } catch (err) {}
  }
};
</script>

