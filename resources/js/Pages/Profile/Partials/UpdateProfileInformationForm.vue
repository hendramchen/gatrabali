<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    districts: Array,
    subdistricts: Array,
    status: {
        type: String,
    },
});

const subdistrictOptions = ref([...props.subdistricts]);

function handleDistrictChange(district_id = 0) {
    const subdata = props.subdistricts.filter(item => item.district_id === district_id);
    console.log(subdata);

    subdistrictOptions.value = subdata;
}

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    email: user.email,
    phone: user.phone ?? '',
    district_id: user.district_id ?? '1',
    subdistrict_id: user.subdistrict_id ?? '1',
    address: user.address ?? '',
    map_address: user.map_address ?? '',
});
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Profile Information</h2>

            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile information and email address.
            </p>
        </header>

        <form @submit.prevent="form.patch(route('profile.update'))" class="mt-6 space-y-6">
            <div>
                <InputLabel for="name" value="Nama Lengkap" />

                <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <InputLabel for="email" value="Email" />

                <input
                    class="border-gray-300 bg-gray-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                    :value="form.email" disabled />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <InputLabel for="phone" value="No. Telphon / WhatsApp" />

                <TextInput id="phone" type="tel" class="mt-1 block w-full" v-model="form.phone" />

                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div>
                <InputLabel for="address" value="Alamat" />

                <TextInput id="address" type="tel" class="mt-1 block w-full" v-model="form.address" />

                <InputError class="mt-2" :message="form.errors.address" />
            </div>

            <div>
                <InputLabel for="map_address" value="Alamat Google Map" />

                <TextInput id="map_address" type="tel" class="mt-1 block w-full" v-model="form.map_address" />

                <InputError class="mt-2" :message="form.errors.map_address" />
            </div>

            <div>
                <InputLabel for="district_id" value="Kabupaten" />
                <select name="district_id" v-model="form.district_id" class="w-full border-gray-300 rounded-md"
                    @change="handleDistrictChange(form.district_id)">
                    <option :value="item.id" v-for="item in districts" :key="item.id">{{ item.name }}</option>
                </select>
            </div>

            <div>
                <InputLabel for="subdistrict_id" value="Kecamatan" />
                <select name="subdistrict_id" v-model="form.subdistrict_id" class="w-full border-gray-300 rounded-md">
                    <option :value="item.id" v-for="item in subdistrictOptions" :key="item.id">{{ item.name }}</option>
                </select>
            </div>

            <div v-if="user.email_verified_at === null">
                <p class="text-sm mt-2 text-gray-800">
                    Your email address is unverified.
                    <Link :href="route('verification.send')" method="post" as="button"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Click here to re-send the verification email.
                    </Link>
                </p>

                <div v-show="status === 'verification-link-sent'" class="mt-2 font-medium text-sm text-green-600">
                    A new verification link has been sent to your email address.
                </div>
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition enter-active-class="transition ease-in-out" enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out" leave-to-class="opacity-0">
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                </Transition>
            </div>
        </form>
    </section>
</template>
