const API_BASE = 'http://127.0.0.1:8000/api';

const app = Vue.createApp({
    data() {
        return {
            agentsData: [],
            error: null,
            selectedAgent: null,
            loadingAgents: true,
            loadingAgentDetails: false,
            lightboxOpen: false,
        }
    },
    created() {
        this.getAgents()
    },
    methods: {
        getAgents() {
            fetch(`${API_BASE}/agents`)
            .then(res => {
                if (!res.ok) {
                    throw new Error("Failed to fetch the agents");
                }
                return res.json()
            })
            .then(agents => {
                this.agentsData = agents
            })
            .catch(err => {
                this.error = err.message;
            })
            .finally(() => {
                this.loadingAgents = false;
            })
        },
        getAgent(id) {
            this.loadingAgentDetails = true;
            this.error = null;
            this.selectedAgent = null;
            this.lightboxOpen = true;

            fetch(`${API_BASE}/agents/${id}`)
            .then(res => {
                if (!res.ok) {
                    throw new Error("Failed to fetch agent details");
                }
                return res.json();
            })
            .then(agent => {
                this.selectedAgent = {
                    name: agent.name || "Unknown",
                    role: agent.role || "Unknown",
                    biography: agent.biography || "No biography available.",
                    icon_url: agent.icon_url || "",
                    image_url: agent.image_url || "",
                    abilities: agent.abilities || []
                }

                this.$nextTick(() => {
                    gsap.from(this.$refs.lightboxContent, {
                        opacity: 0,
                        scale: 0.9,
                        y: 30,
                        duration: 0.4,
                        ease: "back.out(1.2)"
                    })
                })
            })
            .catch(err => {
                this.error = err.message;
            })
            .finally(() => {
                this.loadingAgentDetails = false;
            })
        },
        agentsByRole(role) {
            return this.agentsData
                .filter(agent => agent.role === role)
                .sort((a, b) => a.name.localeCompare(b.name));
        },
        closeLightbox() {
            this.lightboxOpen = false;
            this.selectedAgent = null;
        },
        closeLightboxOutside(e) {
            if (e.target.id === 'lightbox') {
                this.closeLightbox();
            }
        }
    }
}).mount('#app');