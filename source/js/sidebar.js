

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
        this.URL = sb.getAttribute('child-items-url');

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
                console.log(e.target)
                const parentID = label[0].toLowerCase() + label.substring(1);
                
                console.log(e.target.parentElement)
                this.getChildren(parentID,e.target.parentElement);
                this.storeActiveItem(parentID);
            })
        });
        
    }
    
    getChildren(parentID, parent){
        
        fetch(location.origin + this.URL + '?parent=' + parentID)
  .then((response) => {
    return response.json();
  })
  .then((data) => {
      
    this.appendChildren(data, parent)
  });
    }

    appendChildren(children, parent) {
        let subContainer = document.createElement('div');
        subContainer.classList.add('c-sidebar__subcontainer');

        for(let child in children){
            const childItem = document.createElement('div');
            childItem.classList.add('c-sidebar__item');
            let link = document.createElement('a');
            link.classList.add('c-sidebar__link');
            link.text = child;
            childItem.appendChild(link);
            if(childItem.children){
                let toggle = document.createElement('div');
                toggle.classList.add('c-sidebar__toggle');
                const bar = document.createElement('div');
                bar.classList.add('bar');
                toggle.appendChild(bar);
                toggle.appendChild(bar);
                toggle.setAttribute('aria-label', child);
                childItem.appendChild(toggle);
                
            }
            subContainer.appendChild(childItem);
        };
        
        parent.appendChild(subContainer);
        subContainer.classList.add('c-sidebar__item--is-expanded');
        this.addItemTriggers()
    }
    
    storeActiveItem(item) {
        
        let activeItems = this.fetchActiveItems();
        const isAlreadyStored =  this.isAlreadyStored(activeItems, item);
        

        if(activeItems && !('items' in activeItems)) {
            activeItems[item];
        }
        
        else if(isAlreadyStored){
            activeItems.items.push(item);
        }else {

        }

        

        localStorage.setItem(this.ACTIVEITEMS, JSON.stringify(activeItems));
    }

    getTopLevel(){
        
    }

    isAlreadyStored(storedItems, newItem) {
        if(storedItems && storedItems.items){
            for(let i = 0; i < storedItems.items.length ; i++){
                if(storedItems.items[i] === newItem) {
                    return true;
                }
            };
        }

        return false;
    }

    fetchActiveItems(){
        const storedItems = localStorage.getItem(this.ACTIVEITEMS);
        return JSON.parse(storedItems);
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