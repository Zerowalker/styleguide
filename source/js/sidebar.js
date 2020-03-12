export default class Sidebar {
    constructor() {
        this.ATTR = "js-sidebar";
        this.EXPAND = "c-sidebar__item--is-expanded";
        this.EXPANDABLE = "c-sidebar__subcontainer";
        this.ACTIVEITEMS = "active";
        this.ACTIVE = "item-active";
        this.TRIGGER = "js-sidebar-trigger";
    }

    /**
     * Finds all sidebars and applies appropriate classes and attributes on load
     * @return {void}
     */
    applySidebar() {
        const sb = document.querySelector(`[${this.ATTR}]`);
        console.log(sb)
        this.URL = sb.getAttribute('child-items-url');
        console.log(this.URL)
        if (sb) {
            const activeItems = sb.querySelectorAll(`[${this.ACTIVE}="true"]`);

            if (activeItems.length > 0) {
                activeItems.forEach((item) => {
                    if (item.closest('.c-sidebar__subcontainer')) {
                        item.closest('.c-sidebar__subcontainer').classList.add(this.EXPAND);
                        //const id = item.closest('.c-sidebar__subcontainer').getAttribute('js-toggle-item')
                        //sb.querySelector(`[js-toggle-trigger="${id}"]`).setAttribute('aria-pressed', true)
                    }
                })
            }
            
            this.addTriggers(sb);
            this.addItemTriggers();
        }
    }

    
    addItemTriggers() {
        const sbTriggers = document.getElementsByClassName('c-sidebar__toggle');
        
        sbTriggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                const label = e.target.getAttribute('aria-label');
                
                const parentID = label[0].toLowerCase() + label.substring(1);

                this.getChildren(parentID);
                this.storeActiveItem(parentID);
            })
        });
        
    }
    
    getChildren(parentID){
        fetch(location.origin + this.URL + '?parent=' + parentID)
        .then((response) => {
            response.json();
        })
        .then((children) => {
            this.appendChildren(children);
        });
    }

    appendChildren(children) {

    }

    storeActiveItem(item){
        const alreadyStored = JSON.parse(localStorage.getItem(this.ACTIVEITEMS));
        alreadyStored.items.push(item);
        localStorage.setItem(this.ACTIVEITEMS,JSON.stringify(item));
    }

    fetchActiveItems(){

    }
    /**
     * Adds listeners to buttons
     * @param {Object} sb The sidebar
     */
    addTriggers(sb) {
        const sbTriggers = document.querySelectorAll(`[${this.TRIGGER}]`);
        
        sbTriggers.forEach(btn => {
            btn.addEventListener('click', (e) => {
                sb.classList.toggle('c-sidebar--collapsed');
            })
        });
    }
}