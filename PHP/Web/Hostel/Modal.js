function modal(header, body, footer) {
    const modal_container = document.createElement("div")
    modal_container.className = "modal-container"
    document.append(modal_container)
    const modal_content = document.createElement("div")
    modal_content.className = "modal-content"
    const modal_header = document.createElement("div")
    modal_header.className = "modal-header"
    const modal_body = document.createElement("div")
    modal_body.className = "modal-body"
    const modal_footer = document.createElement("div")
    modal_footer.className = "modal-footer"
}