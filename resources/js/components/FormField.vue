<template>
    <default-field :field="field">
        <template slot="field">
            <div class="input_withicon">
                <input :id="field.name" type="text"
                       class="w-full form-control form-input form-input-bordered"
                       :class="errorClasses"
                       :placeholder="field.name"
                       v-model="value"
                />
                <div v-if="this.field.position != 'out'" :class="custom_color(this.field.color)" class="icon_in"
                     :style="getCustomStyle()">
                    <i :class="showIcon(field.icon)">
                    </i>
                </div>
                <div v-if="this.field.position == 'out'" :class="custom_color(this.field.color)" class="icon_out"
                     :style="getCustomStyle()">
                    <i :class="showIcon(field.icon)">
                    </i>
                </div>
                <p v-if="hasError" class="my-2 text-danger">
                    {{ firstError }}
                </p>
            </div>
        </template>
    </default-field>
</template>
<script>
  import { FormField, HandlesValidationErrors } from 'laravel-nova'

  export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],
    data: function (){
      return {
        is_code: false,
      }
    },
    methods: {
      getPosition: function (pos) {
        alert(pos);
      },
      showIcon: function(icon){
        if (icon == null) {
          return 'fas fa-edit';
        } else{
          return this.field.icon;
        }
      },
      getCustomStyle() {
        if(this.is_code == true){
          return "color : " + this.field.color
        }
        return ""
      },
      custom_color(color) {
        if(color.indexOf("#") === 0) {
          this.is_code = true
          return 'custom-color';
        }
        this.is_code = false;
        return this.color;
      },
      /*
       * Set the initial, internal value for the field.
       */
      setInitialValue() {
        this.value = this.field.value || ''
      },

      /**
       * Fill the given FormData object with the field's internal value.
       */
      fill(formData) {
        formData.append(this.field.attribute, this.value || '')
      },

      /**
       * Update the field's internal value.
       */
      handleChange(value) {
        this.value = value
      }
    },
    created: function() {
      if (!this.field.color) {
        this.field.color = '#717A83';
      }
    }
  }
</script>