<template>
    <div>
        <h1>Kalender</h1>
        <div v-if="!loading">
            <div class="row mb-4" v-for="row in rows" :key="'row' + row">
                <div
                class="col d-flex align-items-stretch"
                v-for="(event, column) in eventsInRow(row)"
                :key="'row' + row + column">
                    <event-list-item v-bind="event"></event-list-item>
                </div>

                <div class="col" v-for="p in placeholdesInRow(row)" :key="'placeholder' + row + p"></div>
            </div>
        </div>
        <div v-else>
            loading...
        </div>
    </div>
</template>

<script>
import EventListItem from './EventListItem'
export default {
    components: {
        EventListItem
    },

    data() {
        return {
            events: null,
            loading: false,
            columns: 3
        }
    },

    computed: {
        rows() {
            return this.events == null ? 0 : Math.ceil(this.events.length / this.columns);
        },
    },

    methods: {
        eventsInRow(row) {
            return this.events.slice((row-1) * this.columns, row * this.columns);
        },

        placeholdesInRow(row) {
            return this.columns - this.eventsInRow(row).length;
        }
    },

    created() {
        this.loading = true;

        const request = axios.get("/api/events").then(response => {
            this.events = response.data;
            this.loading = false;
        })
    }
    
}
</script>